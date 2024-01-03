<?php

use App\Http\Controllers\addannonce;
use App\Http\Controllers\adddiplome;
use App\Http\Controllers\addexperience;
use App\Http\Controllers\addposte;
use App\Http\Controllers\addskills;
use App\Http\Controllers\changepassword;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\ClientManagement;
use App\Http\Controllers\contratstore;
use App\Http\Controllers\deleteannonce;
use App\Http\Controllers\deletePoste;
use App\Http\Controllers\freelancercontroller;
use App\Http\Controllers\FreelancerManagement;
use App\Http\Controllers\historiquepropostionfreelancer;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\store_favoris_client;
use App\Http\Controllers\store_favoris_freelancer;
use App\Http\Controllers\updateinfo;
use App\Mail\JOB4FREE;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/auth/facebook', 'FacebookController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'FacebookController@handleFacebookCallback');
Route::post('freelancer/favoris',[store_favoris_freelancer::class,'store'])->name('freelancer_favoris');
Route::get('client/favoris','favorisclientcontroller@create')->middleware(['auth','verified','client'])->name('favoris_client');
Route::post('freelancer/favoris_detele',[store_favoris_freelancer::class,'delete'])->name('freelancer_favoris_delete');
Route::post('client/favoris',[store_favoris_client::class,'store'])->name('client_favoris');
Route::post('client/favoris_detele',[store_favoris_client::class,'delete'])->name('client_favoris_delete');
Route::post('/order', [OrderController::class,'store'])->name('order.store');
Route::get('freelancer/annonce/detail/{id}','detailcontroller@create')->middleware(['auth','verified','freelancer'])->name('detailannonce');
Route::get('freelancer/user/detail/{id}','userdetailcontroller@create')->middleware(['auth','verified','freelancer'])->name('userdetail');
Route::get('client/poste/detail/{id}','detailcontroller@createclient')->middleware(['auth','verified','client'])->name('detailposte');
Route::get('client/user/detail/{id}','userdetailcontroller@createclient')->middleware(['auth','verified','client'])->name('userdetailclient');
Route::get('freelancer/conversation/{id}','freelancerconversation@create')->middleware(['auth','verified','freelancer'])->name('freelancerconversation');
Route::get('freelancer/historiquepropostion','historiquepropostionfreelancer@create')->middleware(['auth','verified','freelancer'])->name('historiquepropostion');
Route::get('client/historiquepropostion','historiquepropostionfreelancer@createclient')->middleware(['auth','verified','client'])->name('historiquepropostionclient');
Route::post('propostion/refuser',[historiquepropostionfreelancer::class,'refuser'])->name('refuser');

Route::get('/get-notifications', function() {
    $user = Auth::user();
    $notifications = DB::table('notiffications')
        ->orderBy('id','desc')
        ->where('id_destinateur', $user->id)
        ->get();
      return $notifications;
});
Route::post('client/contrat',[contratstore::class,'store'])->name('store_contrat');
Route::get('/nb-notification',function (){
   $user=Auth::user()->id;
   $notify= DB::table('notiffications')
       ->where('id_destinateur',$user)
       ->where('read','false')
       ->count();
   return $notify;
});
Route::get('/get-conversation' ,function () {
 $user=Auth::user()->id;
 $con=DB::table('conversations')
     ->orderBy('id','desc')
     ->where('user_id2',$user)
     ->get();
 return $con;
});
Route::get('/nb-message',function (){
   $user=Auth::user()->id;
   $nb=DB::table('conversations')
       ->where('user_id2',$user)
       ->where('read','false')
       ->count();
    $nbb=DB::table('chats')
        ->where('id_destinateur',$user)
        ->where('read','false')
        ->count();
   return $nb+$nbb;
});
Route::post('/update_nb_notification',function (){
    $user=Auth::user()->id;
    DB::table('notiffications')
        ->where('id_destinateur',$user)
        ->update(['read'=>'true']);
})->name('update_nb_notification');
Route::post('/update_nb_message',function (){
    $user=Auth::user()->id;
    DB::table('conversations')
        ->where('user_id2',$user)
        ->update(['read'=>'true']);
    DB::table('chats')
        ->where('id_destinateur',$user)
        ->update(['read'=>'true']);
})->name('update_nb_message');
Route::get('/accept',function (){
    $id=Auth::user()->id;
   $accept= DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_user',$id)
       ->where('etat','Accept')
        ->get();
   return $accept;
});
Route::get('/acceptclient',function (){
    $id=Auth::user()->id;
    $accept= DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_destinateur',$id)
        ->where('etat','Accept')
        ->get();
    return $accept;
});
Route::get('/refuse',function (){
    $id=Auth::user()->id;
    $accept= DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_user',$id)
        ->where('etat','Refuser')
        ->get();
    return $accept;
});
Route::get('/progress',function (){
    $id=Auth::user()->id;
    $progess=DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_user',$id)
        ->where('etat','Inprogress')
        ->get();
    return $progess;
});
Route::get('/progress_client',function (){
    $id=Auth::user()->id;
    $progess=DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_destinateur',$id)
        ->where('etat','Inprogress')
        ->get();
    return $progess;
});
Route::get('/nb-progress',function (){
    $id=Auth::user()->id;
    $progess=DB::table('orders')
        ->where('id_user',$id)
        ->where('etat','Inprogress')
        ->count();
    return $progess;
});
Route::get('/refuseclient',function (){
    $id=Auth::user()->id;
    $accept= DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_destinateur',$id)
        ->where('etat','Refuser')
        ->get();
    return $accept;
});
Route::get('/all',function (){
    $id=Auth::user()->id;
   $all=DB::table('orders')
   ->orderBy('id','desc')
   ->where('id_user',$id)
   ->get();
   return $all;
});
Route::get('/allclient',function (){
    $id=Auth::user()->id;
    $all=DB::table('orders')
        ->orderBy('id','desc')
        ->where('id_destinateur',$id)
        ->get();
    return $all;
});
Route::post('/changephotocoverture',function (Request $request ){
    $image = $request->file('photocov');
    $extension = $image->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $image->move('uploads/photouser',$filename);
    DB::table('users')->where('id',Auth::user()->id)->update(['coverture_img'=>$filename]);
    return redirect()->back();
})->name('changecov');
Route::post('/changephotoprofil',function (Request $request ){
    $image = $request->file('photopro');
    $extension = $image->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $image->move('uploads/photouser',$filename);
    DB::table('users')->where('id',Auth::user()->id)->update(['image'=>$filename]);
    return redirect()->back();
})->name('changepro');

Route::post('/updateaccount',function (Request $request){
    DB::table('users')->where('id',Auth::user()->id)->update(['github'=>$request->input('github'),
        'website'=>$request->input('website'),'facebook'=>$request->input('facebook'),'linkedin'=>$request->input('linkedin')]);
    return redirect()->back()->with("update_account_success","Your Account is Save");
})->name('update_account');
Route::get('freelancer/detail_contrat/{id}','listcontractcontroller@createliste')->middleware(['auth','verified','freelancer','disable_back'])->name('contratdetail');
Route::get('client/detail_contrat/{id}','listcontractcontroller@createlisteclient')->middleware(['auth','verified','client','disable_back'])->name('contratdetailclient');
Route::get('client/liste_contract','listcontractcontroller@createclient')->middleware(['auth','verified','client','disable_back'])->name('list_contract_client');
Route::get('client/contrat/{id}','contratcontroller@create')->middleware(['auth','verified','client','disable_back'])->name('contrat');
Route::get('freelancer/liste_contract','listcontractcontroller@create')->middleware(['auth','verified','freelancer','disable_back'])->name('list_contract_freelancer');
Route::get('freelancer/favoris','favoriscontroller@create')->middleware(['auth','verified','freelancer','disable_back'])->name('favorisfreelancer');
Route::get('client/historique','historiqueposte@historique')->middleware(['auth','verified','client','disable_back'])->name('historiqueannonce');
Route::get('freelancer/setting','setting@create')->middleware(['auth','verified','freelancer','disable_back'])->name('setting');
Route::get('client/setting','setting@createclient')->middleware(['auth','verified','client','disable_back'])->name('settingclient');
Route::post('delete/poste',[deletePoste::class,'delete'])->name('delete');
Route::post('delete/annonce',[deleteannonce::class,'delete'])->name('deleteannonce');
Route::get('/', 'welcomecontroller@create')->name('welcome')->middleware('guest');
Route::get('/tester','testercontroller@create')->name('tester');
Route::get('admin/UserManagement','FreelancerManagement@create')->middleware(['auth','admin','disable_back'])->name('freelancerManagement');
Route::post('admin/UserManagement',[FreelancerManagement::class,'destroy'])->name('freelancer_destroy');
Route::get('admin/ClientManagement','ClientManagement@create')->middleware(['auth','admin','disable_back'])->name('ClientManagement');
Route::post('admin/ClientManagement',[ClientManagement::class,'drop'])->name('client_destroy');
Route::get('admin/dashboard','admincontroller@dashboard')->middleware(['auth','admin','disable_back'])->name('admin');
Route::get('client/dashboard','clientcontroller@dashboard')->middleware(['auth','verified','client','disable_back'])->name('client');
Route::get('freelancer/dashboard','freelancercontroller@dashboard')->middleware(['auth','verified','freelancer','disable_back'])->name('freelancer');
Route::post('freelancer/dashboard',[freelancercontroller::class,'store'])->name('freelancer');
Route::get('freelancer/historique','historiqueposte@create')->middleware(['auth','verified','freelancer','disable_back'])->name('historiqueposte');
Route::post('client/addAd',[addannonce::class,'store'])->name('addann');
Route::post('freelancer/addPoste',[addposte::class,'store'])->name('addposte');
Route::get('freelancer/info','updateinfo@create')->middleware(['auth','verified','freelancer','disable_back'])->name('info');
Route::get('client/info','updateinfo@info')->middleware(['auth','verified','client','disable_back'])->name('infoclient');
Route::post('freelancer/info',[updateinfo::class,'updateinfo'])->name('updateinfo');
Route::get('freelancer/profil','freelancercontroller@profil')->middleware(['auth','verified','freelancer','disable_back'])->name('profilfreelancer');
Route::post('freelancer/profil',[addskills::class,'store'])->name('addskill');
Route::get('freelancer/changepassword','changepassword@create')->middleware(['auth','verified','freelancer','disable_back'])->name('changepasswordfreelancer');
Route::post('freelancer/profill',[adddiplome::class,'store'])->name('adddiplome');
Route::post('freelancer/profilll',[addexperience::class,'store'])->name('addexperience');
Route::post('skill/update',[addskills::class,'update'])->name('updateskill');
Route::get('client/changepassword','changepassword@createclient')->middleware(['auth','verified','client','disable_back'])->name('changepasswordclient');
Route::get('client/profil','clientcontroller@profil')->middleware(['auth','verified','client','disable_back'])->name('profil');
Route::get('client/addAd','clientcontroller@addPoste')->middleware(['auth','verified','client','disable_back'])->name('addAd');
Route::get('freelancer/addPoste','freelancercontroller@addPoste')->middleware(['auth','verified','freelancer','disable_back'])->name('addPoste');
Route::post('client/dashboard',[clientcontroller::class,'request'])->name('client');
Route::post('freelancer/changepassword',[changepassword::class,'store'])->name('changepassword');
Route::get('/dashboard','homecontroller@dashboard')->middleware(['auth','verified','freelancer','client'])->name('dashboard');


require __DIR__.'/auth.php';
