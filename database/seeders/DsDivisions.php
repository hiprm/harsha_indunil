<?php

namespace Database\Seeders;

use App\Models\DsDivision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DsDivisions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ds_division')->insert([[
            'division_name' => 'Colombo 1',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'division_name' => 'Colombo 2',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'division_name' => 'Colombo 3',
                'created_at' => now(),
                'updated_at' => now(),
            ]]);
    }
}
