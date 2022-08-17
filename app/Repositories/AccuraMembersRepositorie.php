<?php

namespace App\Repositories;

use App\Models\AccuraMember;
use App\Models\DsDivision;

class AccuraMembersRepositorie
{
    public function getAll()
    {

      return AccuraMember::with('ds_divisions')->get();

    }

    public function createOrder($request)
    {

        $accura_member = AccuraMember::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'summery' => $request['summery'],
            'ds_division_id' => $request['ds_division'],
            'dob' => $request['date_of_birth'],
            'created_at' =>  now(),
            'updated_at' =>  now(),
        ]);
    }

    public function updateOrder($request)
    {

        $accura_member =  AccuraMember::where('id', $request['id'])
            ->update([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'summery' => $request['summery'],
                'ds_division_id' => $request['ds_division'],
                'dob' => $request['date_of_birth'],
                'updated_at' =>  now(),
            ]);
    }

}
