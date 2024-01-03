<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class setting extends Controller
{
    public function create(){
        $skills=DB::table('skills')->where('user_id',Auth::user()->id)->get();
        return view('freelancer.setting')->with('skills',$skills);
    }
    public function createclient(){
        return view('client.setting');
    }
}
