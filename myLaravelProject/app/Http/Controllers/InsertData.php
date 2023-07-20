<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertData extends Controller
{
    public function getTable(){
        $std = DB::table('std')->get();
        // return  $std;
        // dd($std);
        return view('Student',['data'=> $std]);
    }
}
