<?php

namespace App\Http\Controllers;

use App\Models\AccuraMember;
use App\Models\DsDivision;
use App\Repositories\AccuraMembersRepositorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AccuraMembersController extends Controller
{
    private $accura_member;

    public function __construct()
    {
        $this->accura_member = new AccuraMembersRepositorie();
    }

    public function index()
    {
        $accura_members = $this->accura_member->getAll();
        return view('accura_member.list', ['accura_members' => $accura_members]);
    }

    public function create(Request $request)
    {
        $ds_divisions = DsDivision::all();
        return view('accura_member.create', ['ds_divisions' => $ds_divisions]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'summery' => 'required',
            'date_of_birth' => 'required',
            'ds_division' => 'required'
        ]);
        $this->accura_member->createOrder($request->all());

        return redirect('/')->with('status', 'New Record Has Been inserted');

    }

    public function edit(Request $request)
    {
        $let = preg_replace("/[^0-9]/", "", $request->id);
        $ds_divisions = DsDivision::all();
        $member = AccuraMember::where('id', $let)->get();

        return view('accura_member.edit', ['ds_divisions' => $ds_divisions,'member'=>$member]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'summery' => 'required',
            'date_of_birth' => 'required',
            'ds_division' => 'required'
        ]);

        $this->accura_member->updateOrder($request->all());

        return redirect('/')->with('status', 'Updated Successfully');
    }

    public function delete(Request $request){
        AccuraMember::where('id', $request->id)->delete();
        return redirect('/')->with('status', 'Deleted Successfully');


    }
}
