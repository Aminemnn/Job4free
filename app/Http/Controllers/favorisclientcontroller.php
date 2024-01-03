<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class favorisclientcontroller extends Controller
{
    public function create(){
        $favoris=DB::table('favoris_clients')->where('user_id',Auth::user()->id)->get();
        $postes=DB::select('SELECT * FROM postes');
         return view('client.favoris')->with('favoris',$favoris)->with('postes',$postes);
    }
}
