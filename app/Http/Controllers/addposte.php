<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
class addposte extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title'=>['required', 'string', 'max:255'],
            'category'=>['required', 'string', 'max:255'],
            'sous_category'=>['required', 'string', 'max:255'],
            'image'=>'required',
            'price'=>'required',
            'description'=>'required|min:70|max:200',
        ]);

        $poste=new Poste();
        $poste->title=$request->input('title');
        $poste->category=$request->input('category');
        $poste->sous_category=$request->input('sous_category');
        $poste->price=$request->input('price');
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $image->move('uploads/poste',$filename);
        $poste->image=$filename;
        $poste->description=$request->input('description');
        $poste->user_id=Auth::user()->id;
        $poste->name_user=Auth::user()->name;
        $poste->img_user=Auth::user()->image;
        $poste->bio_user=Auth::user()->bio;
        $poste->save();
        return back()->with("status", "Data Save successfully!");
    }
}
