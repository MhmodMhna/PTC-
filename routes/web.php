<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PtcController;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \App\Models\PtcModel;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',function (){
   return view('addmember');
});
Route::post('/create',function (){
    $PtcModel = new PtcModel();
    $PtcModel->Stdno =request('Stdno');
    $PtcModel->Stdname =request('Stdname');
    $PtcModel->Stdid =request('Stdid');
    $PtcModel->Stdspeeid =request('Stdspeeid');
    $PtcModel->Genderid =request('Genderid');
    $PtcModel->Stntasid =request('Stntasid');
    $PtcModel->Addres =request('Addres');
    $PtcModel->Jawno =request('Jawno');
    $PtcModel->Telno =request('Telno');
    $PtcModel->Calender =request('Calender');
    $PtcModel->Addresstat =request('Addresstat');
    $PtcModel->Addrescity =request('Addrescity');
    $PtcModel->Brounivcant =request('Brounivcant');
    $PtcModel ->save();



});
//Route::get('/add',function (Request $request)
//{
//    DB::table('_personaldata')->insert([
//
//        'Stdno'    => $request ->Stdno,
//        'Stdname'  => $request ->Stdname,
//        'Stdid'    => $request ->Stdid,
//        'Stdspeeid'=> $request ->Stdspeeid,
//        'Genderid' => $request ->Genderid,
//        'Stntasid' => $request ->Stntasid,
//        'Addres'   => $request ->Addres,
//        'Jawno'    => $request ->Jawno,
//        'Telno'    => $request ->Telno,
//        'Calender' => $request ->Calender,
//        'Addresstat' => $request ->Addresstat,
//        'Addrescity' => $request ->Addrescity,
//        'Brounivcant' => $request ->Brounivcant,
//    ]);
//    return redirect()->back();
//
//
//
//});





//Route::view('add','addmember');
//Route::post('add',[PtcController::class,'addDate']);
