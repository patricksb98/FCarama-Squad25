<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CadeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 60; $i++) {

            DB::table('cadeiras')->insert([
                'id_mesa' => $i,
            ]);

            DB::table('cadeiras')->insert([
                'id_mesa' => $i,
            ]);

            DB::table('cadeiras')->insert([
                'id_mesa' => $i,
            ]);

            DB::table('cadeiras')->insert([
                'id_mesa' => $i,
            ]);

            DB::table('cadeiras')->insert([
                'id_mesa' => $i,
            ]);
        }
    }

}
