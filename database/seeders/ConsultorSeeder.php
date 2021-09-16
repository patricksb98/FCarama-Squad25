<?php

namespace Database\Seeders;

use App\Models\Consultor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class ConsultorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 51; $i++){
            DB::table('consultores')->insert([
                'name' => "Admin$i",
                'email' => "admin$i@admin.com",
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
