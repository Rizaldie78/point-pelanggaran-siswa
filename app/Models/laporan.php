<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class laporan extends Model
{
    use HasFactory;

    protected $table ='laporan';

        
    protected $fillable=[
        'guru_id',
        'pelanggaran_id',
    ];

    public function guru()
    {
        return $this->belongsTo(guru::class);
    }

    public function pelanggaran()
    {
        return $this->belongsTo(pelanggaran::class);
    }

    public function siswa()
    {
        return $this->belongsToMany(siswa::class, 'siswa_pelanggaran','laporan_id','siswa_id');
    }
}