<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class freelancercontroller extends Controller
{
    public function dashboard(){
        $categories = DB::select('SELECT * FROM categorie');
        $annonces=DB::table('annonces')->orderBy('id','desc')->get();
        $favoris=DB::table('favoris_freelancers')->where('id_user',Auth::user()->id)->get();
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();
        $postes=DB::table('postes')->where('user_id',Auth::user()->id)->get();
        $graphics_design2 = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing2 = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation2 = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation2 = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio2 = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech2 = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business2 = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style2 = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();
        $user=Auth::user()->id;
        $notify=DB::table('notiffications')->where("id_destinateur",$user)->get();
        return view('freelancer.dashboard',['notify' => $notify])
            ->with('categories',$categories)
            ->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
             ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style)
             ->with('graphics_design2',$graphics_design2)
            ->with('digital_marketing2',$digital_marketing2)
            ->with('writing_translation2',$writing_translation2)
            ->with('video_annimation2',$video_annimation2)
            ->with('music_audio2',$music_audio2)
            ->with('programming_tech2',$programming_tech2)
            ->with('business2',$business2)
            ->with('life_style2',$life_style2)
            ->with('annonces',$annonces)
            ->with('favoris',$favoris)
            ->with('postes',$postes);

    }
public function store(Request $request){
    $souscategorie=null;
    $bio=null;
    if ($_POST['subcategory1'] != null){
    $souscategorie=$request->input('subcategory1');
       }
        if ($_POST['subcategory2']!=null){
            $souscategorie=$request->input('subcategory2');
        }
        if ($_POST['subcategory3']!= null){
            $souscategorie=$request->input('subcategory3');
        }
        if ($_POST['subcategory4']!= null){
            $souscategorie=$request->input('subcategory4');
        }
        if ($_POST['subcategory5']!=null){
            $souscategorie=$request->input('subcategory5');
        }
        if ($_POST['subcategory6']!=null){
            $souscategorie=$request->input('subcategory6');
        }
        if ($_POST['subcategory7']!=null){
            $souscategorie=$request->input('subcategory7');
        }
        if ($_POST['subcategory7']!=null){
            $souscategorie=$request->input('subcategory8');
        }
        if ($_POST['other']!=null){
            $other=$request->input('other');
        }else{
            $other=null;
        }
if ($_POST['bio']!=null){
    $bio=$request->input('bio');
}
        $categorie=$request->input('categorie');
         $country=$request->input('country');
         $ville=$request->input('ville');
         $adresse=$request->input('adresse');
         $phone=$request->input('phone');
         $code=$request->input('code');
    $image = $request->file('img');
    $extension = $image->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $image->move('uploads/photouser',$filename);
      DB::table('users')
          ->where('id',Auth::user()->id)
          ->update(['categorie'=>$categorie,'sous_categorie'=>$souscategorie,
              'country'=>$country,
              'ville'=>$ville,
              'adresse'=>$adresse,
              'codepostal'=>$code,
              'phone'=>$phone,
              'Other'=>$other,
              'image'=>$filename,
              'bio'=>$bio
              ]);
        return back()->with("status", "is changed successfully!");
    }
    public function addPoste(){
        $categories = DB::select('SELECT * FROM categorie WHERE nom != ?',['Other']);
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();
        return view('freelancer.addPoste')
            ->with('categories',$categories)
            ->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style);
    }
public function profil(){
        $image=DB::table('users')->select('image')->where('id',Auth::user()->id)->get();
        $skills=DB::table('skills')->where('user_id',Auth::user()->id)->get();
        $postes=DB::table('postes')->where('user_id',Auth::user()->id)->get();
          $pos = DB::select('SELECT * FROM postes WHERE id = ?',[Auth::user()->id]);
        return view('freelancer.profil')
            ->with('image',$image)
            ->with('skills',$skills)
            ->with('postes',$postes)
            ->with('pos',$pos);
}
}
