<?php

namespace App\Http\Controllers;

use App\Models\Momber;
use Illuminate\Http\Request;
use App\Models\PtcModel;

class PtcController extends Controller
{

//    public function edit ($id)
//    {
//
////        return view('edit');
//        $contact = PtcModel::find($id);
//        return view('edit',compact('contact'));
//    }
    public function update ()
    {

    }
//    public function delete ($id)
//    {
//       $data= Momber::find($id);
//       $data ->delete();
//       return redirect('familyhouse');
//    }
    public function destroy ($id)
    {
//        $contact = PtcModel::find($id);
//        return redirect('brouniv');

    }

//
//    function addDate (Request $req)
//    {
//        $member= new PtcModel ;
//        $member -> name = $req -> name;
//        $member -> email = $req -> email;
//        $member -> address = $req -> address;
//        $member -> save();
//        return redirect('add');
//
//
//    }
}
