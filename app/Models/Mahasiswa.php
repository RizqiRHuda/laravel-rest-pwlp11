<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    public $timestamps = false;
    protected $primaryKey = 'nim'; // Memanggil isi DB dengan primarykey
    public $incrementing=false;


    protected $fillable = [
        'nim',
        'nama',
        'foto',
        'kelas_id',
        'kelas',
        'jurusan',
        'no_hp',
        'email',
        'tgl_lahir'
    ];
}
