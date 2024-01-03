<?php

namespace App\Http\Controllers;

use App\Models\notiffication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historiquepropostionfreelancer extends Controller
{
    public function create(){
        $proposition=DB::table('orders')->orderBy('id','desc')->where('id_user',Auth::user()->id)->get();
        return view('freelancer.propostionhistorique')->with('proposition',$proposition);
    }
    public function createclient(){
        $proposition=DB::table('orders')->orderBy('id','desc')->where('id_destinateur',Auth::user()->id)->get();
        return view('client.propostionhistorique')->with('proposition',$proposition);
    }
    public function refuser(Request $request){
          $id=$request->input('refuser');
          DB::table('orders')->where('id',$id)->update(['etat'=>'Refuser']);
          $notification = new notiffication();
          $notification->id_expediteur=Auth::user()->id;
          $notification->name_expediteur=Auth::user()->name;
          $notification->img_expedietur=Auth::user()->image;
          $notification->id_destinateur=$request->input('id_destinateur');
          $notification->message=Auth::user()->name.' To Refuse Your Proposal';
          $notification->read='false';
          $notification->save();
          return redirect('client/historiquepropostion')->with("refuser_success","this proposition is refuse");
    }
}
