<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jadwal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jam',
    ];

    /**
     * Get the doctors associated with the schedule.
     */
    public function dokters()
    {
        return $this->hasMany(Dokter::class, 'id_jadwal');
    }

    /**
     * Get the booking details associated with the schedule.
     */
    public function bookingDetails()
    {
        return $this->hasMany(DetailJadwal::class, 'id_jadwal');
    }
}
