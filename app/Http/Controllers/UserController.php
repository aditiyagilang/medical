<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

     public function showLoginForm()
     {
         return view('login');
     }
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'username' => 'sometimes|required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($validatedData);

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }


    public function login(Request $request)
    {
        // DD("AAAA");
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $hashedPassword = bcrypt($validatedData['password']);
// DD($hashedPassword);
    // Debug output untuk validasi data dan hasil bcrypt


        // $pass = bcrypt($validatedData['password']);
        // dd($pass);
        $user = User::where('username', $validatedData['username'])->first();
        // dd($hashedPassword, " = " , $user->password);
        if ($user && Hash::check($validatedData['password'], $user->password)) {
            return redirect('/dashboard_admin');
        }
        else {
            return back();
        }

    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('landingpage');
    }
    public function logouts(Request $request)
    {
        $request->session()->flush();
        return view('landingpage_admin');
    }
}
