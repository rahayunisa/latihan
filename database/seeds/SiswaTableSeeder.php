<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = [
        ['nama'=>'Nisarhy','tanggal_lahir'=>'2000-02-28','jenis_kelamin'=>'Perempuan'],
        ['nama'=>'Krisnapurn','tanggal_lahir'=>'2000-07-01','jenis_kelamin'=>'Laki-Laki'],
        ['nama'=>'Suciandari','tanggal_lahir'=>'2000-02-02','jenis_kelamin'=>'Perempuan'],
        ['nama'=>'Jihanna','tanggal_lahir'=>'2009-09-27','jenis_kelamin'=>'Perempuan'],
        ['nama'=>'Pasyasm','tanggal_lahir'=>'2010-01-01','jenis_kelamin'=>'Laki-Laki'],
        ];

        //
        DB::table('siswa')->insert($a);
    }
}
