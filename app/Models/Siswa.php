<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis', 'nama', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat' , 'asal_sekolah', 'kelas', 'jurusan' 
    ];
}
