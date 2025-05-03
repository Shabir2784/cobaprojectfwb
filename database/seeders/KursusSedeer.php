<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KursusSedeer extends Seeder
{
    public function run(): void
    {
         DB::table('instruktur_d0223306_a')->insert([
          


            ['id' => '1',
            'nama' => 'Dewi Lestari',
            'keahlian' => 'Web Development'],
            
            ['id' => '2',
            'nama' => 'Dewi Lestari',
            'keahlian' => 'Web Development'],
            ['id' => '3',
            'nama' => 'shabir',
            'keahlian' => 'Web Development'],
        ]);

        DB::table('profil_instruktur_d0223306_a')->insert([
         
            ['instruktur_id' => '1',
            'biografi' => 'Senior Web Developer dengan pengalaman 5 tahun',
            'linkedin' => 'https://linkedin.com/in/dewi'],
            ['instruktur_id' => '2',
            'biografi' => 'Senior Web Developer dengan pengalaman 10 tahun',
            'linkedin' => 'https://linkedin.com/in/ridwan'],


        ]);

        DB::table('kelas_d0223306_a')->insert([
    


            ['id' => '1',
            'judul' => 'Kelas Laravel Dasar',
            'instruktur_id' => '1'],
            ['id' => '2',
            'judul' => 'Kelas Laravel Mahir',
            'instruktur_id' => '2',],
            ['id' => '3',
            'judul' => 'Kelas Laravel Mahir',
            'instruktur_id' => '3',],
        ]);

        DB::table('peserta_kelas_d0223306_a')->insert([
            'kelas_id' => '1',
            'nama_peserta' => 'Tono',
        ]);
    }
}
