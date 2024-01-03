<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class listcontractcontroller extends Controller
{
    public function create(){
        $contract=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->get();
        $sum_contrat =DB::table('contrats')->where('id_freelancer',Auth::user()->id)
            ->sum('total_amount');
        $count_contrat = DB::table('contrats')->where('id_freelancer',Auth::user()->id)->count();
        $sum_paid=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('payement_status','Paid')
            ->sum('total_amount');
        $count_paid=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('payement_status','Paid')
            ->count();
        $sum_unpaid=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('payement_status','Unpaid')
            ->sum('total_amount');
        $count_unpaid=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('payement_status','Unpaid')
            ->count();
        $sum_cancel=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('cancel','true')
            ->sum('total_amount');
        $count_cancel=DB::table('contrats')->where('id_freelancer',Auth::user()->id)->where('cancel','true')
            ->count();
        return view('freelancer.listcontrat')->with('contract',$contract)
            ->with('sum_contrat',$sum_contrat)
            ->with('count_contrat',$count_contrat)
            ->with('sum_paid',$sum_paid)
            ->with('count_paid',$count_paid)
            ->with('sum_unpaid',$sum_unpaid)
            ->with('count_unpaid',$count_unpaid)
            ->with('sum_cancel',$sum_cancel)
            ->with('count_cancel',$count_cancel);
    }
    public function createliste($id){
        $contrat=DB::table('contrats')->where('id',$id)->get();
        return view('freelancer.contractdetail')->with('contrat',$contrat);
    }

    public function createclient(){
        $contract=DB::table('contrats')->where('id_client',Auth::user()->id)->get();
        $sum_contrat =DB::table('contrats')->where('id_client',Auth::user()->id)
            ->sum('total_amount');
        $count_contrat = DB::table('contrats')->where('id_client',Auth::user()->id)->count();
        $sum_paid=DB::table('contrats')->where('id_client',Auth::user()->id)->where('payement_status','Paid')
            ->sum('total_amount');
        $count_paid=DB::table('contrats')->where('id_client',Auth::user()->id)->where('payement_status','Paid')
            ->count();
        $sum_unpaid=DB::table('contrats')->where('id_client',Auth::user()->id)->where('payement_status','Unpaid')
            ->sum('total_amount');
        $count_unpaid=DB::table('contrats')->where('id_client',Auth::user()->id)->where('payement_status','Unpaid')
            ->count();
        $sum_cancel=DB::table('contrats')->where('id_client',Auth::user()->id)->where('cancel','true')
            ->sum('total_amount');
        $count_cancel=DB::table('contrats')->where('id_client',Auth::user()->id)->where('cancel','true')
            ->count();
        return view('client.listcontrat')->with('contract',$contract)
            ->with('sum_contrat',$sum_contrat)
            ->with('count_contrat',$count_contrat)
            ->with('sum_paid',$sum_paid)
            ->with('count_paid',$count_paid)
            ->with('sum_unpaid',$sum_unpaid)
            ->with('count_unpaid',$count_unpaid)
            ->with('sum_cancel',$sum_cancel)
            ->with('count_cancel',$count_cancel);
    }
    public function createlisteclient($id){
        $contrat=DB::table('contrats')->where('id',$id)->get();
        return view('client.contractdetail')->with('contrat',$contrat);
    }
}
