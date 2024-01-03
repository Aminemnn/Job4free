<?php

namespace App\Http\Controllers;

use App\Models\contrat;
use App\Models\notiffication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class contratstore extends Controller
{
    public function store(Request $request){
        $adreese_client=$request->input('adresse_client');
        $code_postal_client=$request->input('code_postal_client');
        $legal=$request->input('legal');
        $email_client=$request->input('email_client');
        $web_site_client=$request->input('web_site_client');
        $phone_client=$request->input('phone_client');
        $facture=$request->input('num_facture');
        $date=$request->input('date');
        if ($request->input('payment_status')=='null'){
            return redirect()->back()->with("payment_status_error","Please Select Your Payment Status");
        }else{
            $payment_status=$request->input('payment_status');
        }
        $total_amount=$request->input('total_amount');
        $name_client=$request->input('name_client');
        $country_client=$request->input('country_client');
        $ville_client=$request->input('ville_client');
        $id_freelancer=$request->input('id_freelancer');
        $name_freelancer=$request->input('name_freelancer');
        $adreese_freelancer=$request->input('adresse_freelancer');
        $country_freelancer=$request->input('country_freelancer');
        $ville_freelancer=$request->input('ville_freelancer');
        $phone_freelancer=$request->input('phone_freelancer');
        $currency=$request->input('currency');
        $title_projet=$request->input('title_projet');
        $categorie=$request->input('categorie');
        $sous_categorie=$request->input('sous_categorie');
        $price_categorie=$request->input('price_categorie');
        $price=$request->input('price');
        $type_price=$request->input('type_price');
        $semaine=$request->input('semaine');
        $data=$request->input('data');
        if ($request->input('payment_details')=='null') {
            return redirect()->back()->with("payment_details_error","Please Select Your Payment details");

        }else{
            $payement_details = $request->input('payment_details');
        }
        $card_holder_name=$request->input('card_holder_name');
        $number_card=$request->input('number_card');

        $contrat = new contrat();

        $contrat->adresse_client=$adreese_client;
        $contrat->code_postal_client=$code_postal_client;
        $contrat->email_client=$email_client;
        $contrat->web_site_client=$web_site_client;
        $contrat->num_facture=$facture;
        $contrat->date=$date;
        $contrat->payement_status=$payment_status;
        $contrat->total_amount=$total_amount;
        $contrat->id_client=Auth::user()->id;
        $contrat->name_client=$name_client;
        $contrat->country_client=$country_client;
        $contrat->ville_client=$ville_client;
        $contrat->phone_client=$phone_client;
        $contrat->legal=$legal;
        $contrat->id_freelancer=$id_freelancer;
        $contrat->name_freelancer=$name_freelancer;
        $contrat->adresse_freelancer=$adreese_freelancer;
        $contrat->country_freelancer=$country_freelancer;
        $contrat->ville_freelancer=$ville_freelancer;
        $contrat->phone_freelancer=$phone_freelancer;
        $contrat->currency=$currency;
        $contrat->title_projet=$title_projet;
        $contrat->categorie=$categorie;
        $contrat->sous_categorie=$sous_categorie;
        $contrat->price_categorie=$price_categorie;
        $contrat->price=$price;
        $contrat->type_price=$type_price;
        $contrat->semaine=$semaine;
        $contrat->data=$data;
        $contrat->payment_details=$payement_details;
        $contrat->card_holder_name=$card_holder_name;
        $contrat->number_card=$number_card;
        $contrat->cancel='false';
        $contrat->save();
DB::table('orders')->where('id',$request->input('id'))->update(['etat'=>'Accept']);
$notify=new notiffication();
$notify->id_expediteur=Auth::user()->id;
$notify->name_expediteur=Auth::user()->name;
$notify->img_expedietur=Auth::user()->image;
$notify->id_destinateur=$id_freelancer;
$notify->message=Auth::user()->name." To Accept Your Proposal";
$notify->read="false";
$notify->save();
        return redirect('client/historiquepropostion')->with("contrat_success","he send the contract to freelancer with success");

    }
}
