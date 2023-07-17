<?php

namespace App\Models;

use App\Models\guru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    use HasFactory;

    protected $table='siswa';

    protected $fillable=[
        'nama',
        'kelas',
        'jurusan',
        'nis',
        'jenis_kelamin',
        'alamat',
        'telephone',
        'email',
        'guru_id',
        'point'
    ];

    public function guru(){
        return $this->belongsTo(guru::class);
    }

    public function pelanggaran(){
        return $this->hasMany(pelanggaran::class);
    }

    public function laporan(){
        return $this->belongsToMany(laporan::class);
    }

}
