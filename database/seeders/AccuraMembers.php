<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccuraMembers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accura_members')->insert([[
            'first_name' => 'Harsha',
            'last_name' => 'Indunil',
            'summery' => 'test summery',
            'ds_division_id' => 1,
            'dob' => '1996-09-21',
                'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'first_name' => 'Namidu',
            'last_name' => 'Suranja',
            'summery' => 'test summery',
            'ds_division_id' => 2,
            'dob' => '1997-09-21',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'first_name' => 'Dhanuja',
            'last_name' => 'Sathsara',
            'summery' => 'test summery',
            'ds_division_id' => 3,
            'dob' => '1995-09-21',
            'created_at' => now(),
            'updated_at' => now(),
        ]]

        );
    }
}
