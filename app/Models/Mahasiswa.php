<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    use HasFactory;


    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'tempat lahir',
        'tanggal lahir',
        'nohp',
        'domisili',
        'email',
        'jenis kelamin',
        'tahun masuk',
    ];

}
