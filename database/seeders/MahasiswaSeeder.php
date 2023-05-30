<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim'=>'2141720264',
                'nama'=>'Rizqi Rohmatul Huda',
                'kelas'=>'TI - 2G',
                'jurusan'=>'Teknologi Informasi',
                'no_hp'=>'085334344962',
                'email'=>'rizqir@gmail.com',
                'tgl_lahir'=>'2002-07-31'
            ],
           
        ];
        DB::table('mahasiswas')->insert($data);
    
    }
}
