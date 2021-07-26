<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address'=>'Banyuwangi',
            'nomor_tlp'=>'082264018102',
            'ttl'=>'2000-10-09',
            'foto'=>'dion.jpg'
        ]);
    }
}
