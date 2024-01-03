<?php

namespace App\Http\Controllers;

use App\Models\favoris_client;
use App\Models\favoris_freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class store_favoris_client extends Controller
{
    public function store(Request $request){
        $id_ann=$request->input('id_ann');
        $title=$request->input('title');
        $category=$request->input('category');
        $sous_category=$request->input('sous_category');
        $image=$request->input('image');
        $price=$request->input('price');
        $etat=$request->input('etat');
        $description=$request->input('description');
        $id_destinateur=$request->input('user_id');
        $name_freelancer=$request->input('name_freelancer');
        $img_freelancer=$request->input('img_freelancer');

        $id_user=Auth::user()->id;
        $name_user=Auth::user()->name;
        $img_user=Auth::user()->image;
        $favoris_client=new favoris_client();
        $favoris_client->id_poste=$id_ann;
        $favoris_client->title=$title;
        $favoris_client->category=$category;
        $favoris_client->sous_category=$sous_category;
        $favoris_client->image=$image;
        $favoris_client->price=$price;
        $favoris_client->description=$description;
        $favoris_client->user_id=$id_user;
        $favoris_client->name_user=$name_user;
        $favoris_client->img_user=$img_user;
        $favoris_client->id_destinateur=$id_destinateur;
        $favoris_client->name_freelancer=$name_freelancer;
        $favoris_client->img_freelancer=$img_freelancer;
        $favoris_client->save();
        return redirect('client/dashboard')->with("success2","The item saved in: My first list.");
    }
    public function delete(Request $request){
        $id=$request->input('delete');
        DB::table('favoris_clients')->where('id_poste', "=", $id)->delete();
        return redirect('client/dashboard')->with("delete", "is delete");
    }
}
