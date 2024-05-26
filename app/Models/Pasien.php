<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pasien';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIK',
        'email',
        'nama',
        'tanggal_lahir',
        'alamat',
        'gender',
        'No_RM',
        'no_hp',
    ];

    /**
     * Get the bookings for the patient.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id_pasien');
    }
}
