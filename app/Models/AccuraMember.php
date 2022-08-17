<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccuraMember extends Model
{
    protected $table = 'accura_members';

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id', 'first_name', 'last_name', 'summery', 'ds_division_id', 'dob', 'created_at', 'updated_at'];

    public function ds_divisions()
    {
        return $this->belongsTo('App\Models\DsDivision', 'ds_division_id', 'id');
    }


}
