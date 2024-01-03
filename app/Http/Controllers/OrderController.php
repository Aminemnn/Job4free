<?php

namespace App\Http\Controllers;

use App\Events\NewOrder;

use App\Models\notiffication;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
       $existing_order = order::where('id_user', Auth::user()->id)
            ->where('id_projet', $request->input('id_projet'))
            ->first();
        if ($existing_order) {
            return redirect()->back()->with('order_error', 'You have already submitted an order for this project.');
        }else {
            $propostion=DB::table('annonces')->select('propostion')->where('id',$request->input('id_projet'))->get();
            $json=json_decode($propostion,true);
            $filname=$json[0]['propostion'];
            $order = new order();
            $order->id_projet = $request->input('id_projet');
            $order->title_projet = $request->input('title_projet');
            $order->categorie = $request->input('categorie');
            $order->sous_categorie = $request->input('sous_categorie');
            $order->price_categorie = $request->input('price_categorie');
            $order->price = $request->input('price');
            $order->type_price = $request->input('type_price');
            $order->semaine = $request->input('semaine');
            $order->date = $request->input('date');
            $order->description = $request->input('description');
            $order->id_destinateur = $request->input('id_user');
            $order->id_user = Auth::user()->id;
            $order->name_user = Auth::user()->name;
            $order->image_user = Auth::user()->image;
            $order->adresse_user=Auth::user()->adresse;
            $order->country_user=Auth::user()->country;
            $order->ville_user=Auth::user()->ville;
            $order->phone_user=Auth::user()->phone;
            $order->etat="Inprogress";
            $order->save();
            $notification=new notiffication();
            $notification->id_expediteur=Auth::user()->id;
            $notification->name_expediteur=Auth::user()->name;
            $notification->img_expedietur=Auth::user()->image;
            $notification->id_destinateur=$request->input('id_user');
            $notification->message='New Proposal Received From '.Auth::user()->name;
            $notification->read='false';
            $notification->save();
            DB::table('annonces')->where('id',$request->input('id_projet'))->update(['propostion'=>$filname+1]);
            return redirect()->back()->with('order_success', 'Order created successfully!');
        }
    }

}
