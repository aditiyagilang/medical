<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJadwal extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'detail_jadwal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_jadwal',
        'id_dokter',
    ];

    /**
     * Get the schedule associated with the detail.
     */
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    /**
     * Get the doctor associated with the detail.
     */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
