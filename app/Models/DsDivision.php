<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DsDivision extends Model
{
    protected $table = 'ds_division';


    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'division_name', 'created_at', 'updated_at'];


}
