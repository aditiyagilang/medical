<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'id_jadwal',
        'id_layanan',
    ];

    /**
     * Get the service associated with the doctor.
     */
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    /**
     * Get the schedule associated with the doctor.
     */
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
