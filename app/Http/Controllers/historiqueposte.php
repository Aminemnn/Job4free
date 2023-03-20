<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historiqueposte extends Controller
{
    //
    public function create(){
        $postes=DB::table('postes')->where('user_id',Auth::user()->id)->get();
        return view('freelancer.historiqueposte')->with('postes',$postes);
    }
}
