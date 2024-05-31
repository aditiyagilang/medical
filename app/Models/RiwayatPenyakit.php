<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// app/Models/RiwayatPenyakit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/RiwayatPenyakit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakit extends Model
{
    use HasFactory;

    protected $table = 'riwayat_penyakit';

    protected $fillable = [
        'pasien_id',
        'riwayat_penyakit',
    ];

 

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}


