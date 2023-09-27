<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cara migrate ke sql
        DB::table('siswa')->insert([
            'nama' => 'Latip',
            'nomor_induk' => '1000',
            'alamat' => 'isekai',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('siswa')->insert([
            'nama' => 'budi',
            'nomor_induk' => '1001',
            'alamat' => 'Liyue',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('siswa')->insert([
            'nama' => 'otong',
            'nomor_induk' => '1002',
            'alamat' => 'mars',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
