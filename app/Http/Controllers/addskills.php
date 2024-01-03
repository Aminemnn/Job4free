<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class addskills extends Controller
{
    public function store(Request $request){
        $request->validate([
               'name'=>'required',
               'etat'=>'required',
               'level'=>'required'
        ]);
        $skill=new skill();
        $skill->name=$request->input('name');
        $skill->etat=$request->input('etat');
        $skill->level=$request->input('level');
        $skill->user_id=Auth::user()->id;
        $skill->user_name=Auth::user()->name;;
        $skill->save();
        return redirect()->back()->with("order_success","Skill added successfully !");
    }
    public function update(Request $request){
        $id=$_POST['update'];
        $range=DB::table('skills')->select('level')->where('id',$id)->get();
        $json=json_decode($range,true);
        $filname=$json[0]['level'];
        if ($request->input('level')==$filname){
            return redirect('freelancer/profil')->with("error","Your level is Already exists");
        }
        skill::whereId($id)->update([
            'level'=>$request->input('level')
        ]);
        return redirect('freelancer/profil')->with("status","level changed successfully!");
    }
}
