<?php

namespace App\Models;

use App\Models\siswa;
use App\Models\laporan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class guru extends Model
{
    use HasFactory;

    protected $table='guru';

    protected $fillable=[
        'nama',
        'nik',
        'jenis_kelamin',
        'alamat'
    ];
    public function siswa(){
        return $this->hasMany(siswa::class);
    }

    public function laporan(){
        return $this->hasMany(laporan::class);
    }
}
