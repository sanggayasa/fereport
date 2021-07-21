<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class office extends Model
{
    //use HasFactory;

    protected $guarded = [];
    public function alldata()
    {
        return DB::table('m_office')->get();

        //return view('user.index', ['office' => $office]);
    }
}
