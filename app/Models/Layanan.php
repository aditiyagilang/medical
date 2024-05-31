<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'layanan';
    protected $fillable = [
        'nama',
    ];

    /**
     * Get the doctors associated with the service.
     */
    public function dokters()
    {
        return $this->hasMany(Dokter::class, 'id_layanan');
    }
}
