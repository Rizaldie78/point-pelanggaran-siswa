<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    use HasFactory;

    protected $table='pelanggaran';

    protected $fillable=[
        'pelanggaran',
        'tindak_lanjut',
        'point'
    ];

    public function siswa(){
        return $this->belongsTo(siswa::class,'siswa_id','id');
    }

    public function laporan(){
        return $this->hasMany(laporan::class);
    }
}
