<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class detailcontroller extends Controller
{
public function create($id){
    $annonce=DB::table('annonces')->where('id',$id)->get();
    $views=DB::table('annonces')->select('views')->where('id',$id)->get();
    $json=json_decode($views,true);
    $filname=$json[0]['views'];
    $userId = Auth::id(); // obtenir l'ID de l'utilisateur connecté
    $viewedKey = 'viewed_'.$userId.'_'.$id; // clé de session unique pour l'utilisateur et l'annonce
    if(!session()->has($viewedKey)) {
        $updated = DB::table('annonces')->where('id', $id)->increment('views');
        session([$viewedKey => true]);
    }
    return view('freelancer.detail')->with('annonce',$annonce);
}
public function createclient($id){
    $annonce=DB::table('postes')->where('id',$id);
    return view('client.detail',['annonce'=>$annonce]);
}
}
