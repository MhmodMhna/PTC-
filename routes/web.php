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
// البداية
Route::get('/', function () {
    return view('start');
});
// الصفحة الاولى بيانات الطالب
Route::get('/studentinfo', function () {
    return view('/studentinfo');
});
Route::post('/studentinfo',function (Request $request){

    DB::table('student-info')->insert([

        'stud_name'         => $request ->stud_name,
        'stud_id'           => $request ->stud_id,
        'acadmic_id'        => $request ->acadmic_id,
        'specialty'         => $request ->specialty,
        'semester_year'     => $request ->semester_year,
        'semester'          => $request ->semester,
        'fees_sem'          => $request ->fees_sem,
        'acc_fee'           => $request ->acc_fee,
        'gender'            => $request ->gender,
        'social_stud'       => $request ->social_stud,
        'adrress'           => $request ->adrress,
        'tel'               => $request ->tel,
        'help'              => $request ->help,
        'ware_help'         => $request ->ware_help,
        'college_loan'      => $request ->college_loan,
        'member_loan'       => $request ->member_loan,
        'student_work'      => $request ->student_work,
        'student_salary'    => $request ->student_salary,

    ]);

    return redirect('parent');
});


// الصفحة الاولى بيانات الطالب
Route::get('/parent', function () {
    return view('/parent');
});
Route::post('/parent',function (Request $request){

    DB::table('parent-date')->insert([
        'parents_name'   => $request ->parents_name,
        'per_relation'   => $request ->per_relation,
        'idpare_no'      => $request ->idpare_no,
        'health'         => $request ->health,
        'pare_work'      => $request ->pare_work,
        'pare_salaly'    => $request ->pare_salaly,

   ]);

    return redirect('family');
});


//صفحة العائلة
Route::get('family', function () {
    return view('family');
});
Route::post('family',function (Request $request){

    DB::table('family-info')->insert([

        'fam_name'         => $request ->fam_name,
        'fam_relation'           => $request ->fam_relation,
        'fam_age'        => $request ->fam_age,
        'fam_level'         => $request ->fam_level,
        'fam_work'     => $request ->fam_work,
        'fam_salary'          => $request ->fam_salary,
        'fam_aid'          => $request ->fam_aid,
        'fam_nots'           => $request ->fam_nots,

    ]);

    return redirect()->back();
});



// دالة العرض للعائلة
Route::get('family',function (){
   $tasks = DB::table('family-info')->get();
    return view('family',compact('tasks'));
});




// الاخوة الجامعيين
Route::get('brouniv', function () {
    return view('brouniv');
});


Route::post('brouniv',function (Request $request){

    DB::table('brother-univ')->insert([

        'bro_name'         => $request ->bro_name,
        'bro_college'         => $request ->bro_college,
        'bro_level'         => $request ->bro_level,
        'bro_get_help'         => $request ->bro_get_help,
        'bro_aid'         => $request ->bro_aid,
        'bro_notes'         => $request ->bro_notes,

    ]);

    return redirect()->back();
});
// عرض الاخوة
Route::get('brouniv',function (){
    $tasks = DB::table('brother-univ')->get();
    return view('brouniv',compact('tasks'));
});

// الاضافة في املاك العائلة
Route::get('familyhouse', function () {
    return view('familyhouse');
});


Route::post('familyhouse',function (Request $request){

    DB::table('family-property')->insert([

        'acctype'    => $request ->acctype,
        'fampre'     => $request ->fampre,
//        'acctypefile'     => $request ->acctypefile,

    ]);

    return redirect()->back();
});
// العرض للاملاك
Route::get('familyhouse',function (){
    $tasks = DB::table('family-property')->get();
    return view('familyhouse',compact('tasks'));
});

//Route::get('delete/{id}', function ($id)
//{
//    (family-property)::destroy([$id]);
//    return redirect()->back();
//}
//);
// الحذف في املاك العائلة
Route::get('delete/{id}',function ($id){
   $delete = DB::delete('DELETE FROM `family-property` WHERE `family-property`.`id` = ?',[$id]);
    return redirect()->back();
});
// الحذف في جدول الاخوة في الجامعات
Route::get('delete1/{id}',function ($id){
    $delete1 = DB::delete('DELETE FROM `brother-univ` WHERE `brother-univ`.`id` = ?',[$id]);
    return redirect()->back();
});
// الاحذف في جدول العائلة
Route::get('delete2/{id}',function ($id){
    $delete2 = DB::delete('DELETE FROM `family-info` WHERE `family-info`.`id` = ?',[$id]);
    return redirect()->back();
});


Route::get('end', function () {
    return view('end');
});

//Route::get('delete/{id}',[PtcController::class,'delete']);
//Route::delete('destroy/{id}',[PtcController::class,'destory']);






////صفحة ولى الامر
//Route::get('/parent', function () {
//    return view('parent');
//});
//// اضافة ولى الامر
//Route::post('/parent',function (Request $request){
//
//    DB::table('parent-date')->insert([
//
//        'parents_name'    => $request ->parents_name,
//        'per_relation'  => $request ->per_relation,
//        'idpare_no'    => $request ->idpare_no,
//        'health'=> $request ->health,
//        'pare_work' => $request ->pare_work,
//        'pare_salaly' => $request ->pare_salaly,
//        'parework_plase'   => $request ->parework_plase,
//
//
//    ]);
//    return redirect()->back();
//
////    return view('family');
//});















//Route::get('/form', function () {
//    return view('form');
//});

// دالة الاضافة get
//Route::get('/create1',function (){
//   return view('form');
////    return view('addmember');
//});
//// دالة الاضافة post
//Route::post('/create1',function (Request $request){

//    DB::table('student-info')->insert([
//
//        'stud_name'    => $request ->stud_name,
//        'stud_id'  => $request ->stud_id,
//        'acadmic_id'    => $request ->acadmic_id,
//        'specialty'    => $request ->specialty,
//        'semester_year'    => $request ->semester_year,
//        'semester'=> $request ->semester,
//        'fees_sem' => $request ->fees_sem,
//        'acc_fee' => $request ->acc_fee,
//        'gender'   => $request ->gender,
//        'social_stud'    => $request ->social_stud,
//        'adrress'    => $request ->adrress,
//        'tel' => $request ->tel,
//        'help' => $request ->help,
//        'ware_help' => $request ->ware_help,
//        'college_loan' => $request ->college_loan,
//        'member_loan' => $request ->member_loan,
//        'student_work' => $request ->student_work,
//        'student_salary' => $request ->student_salary,
//
//    ]);
//    DB::table('brother-univ')->insert([
//
//        'bro_name'    => $request ->bro_name,
//        'bro_college'  => $request ->bro_college,
//        'bro_level'    => $request ->bro_level,
//        'bro_get_help'=> $request ->bro_get_help,
//        'bro_aid' => $request ->bro_aid,
//        'bro_notes' => $request ->bro_notes,
//
//    ]);

//    DB::table('parent-date')->insert([
//
//        'parents_name'    => $request ->parents_name,
//        'per_relation'  => $request ->per_relation,
//        'idpare_no'    => $request ->idpare_no,
//        'health'=> $request ->health,
//        'pare_work' => $request ->pare_work,
//        'pare_salaly' => $request ->pare_salaly,
//        'parework_plase'   => $request ->parework_plase,
//
//
//    ]);
//    DB::table('family-info')->insert([
//
//        'fam_name'    => $request ->fam_name,
//        'fam_relation'  => $request ->fam_relation,
//        'fam_age'    => $request ->fam_age,
//        'fam_level'=> $request ->fam_level,
//        'fam_work' => $request ->fam_work,
//        'fam_salary' => $request ->fam_salary,
//        'fam_aid'   => $request ->fam_aid,
//        'fam_nots'    => $request ->fam_nots,
//
//    ]);

//    DB::table('brother-univ')->insert([
//
//        'bro_name'    => $request ->bro_name,
//        'bro_college'  => $request ->bro_college,
//        'bro_level'    => $request ->bro_level,
//        'bro_get_help'=> $request ->bro_get_help,
//        'bro_aid' => $request ->bro_aid,
//        'bro_notes' => $request ->bro_notes,
//
//    ]);
//    DB::table('family-property')->insert([
//
//        'stud_name'    => $request ->acctype,
//        'stud_id'  => $request ->fampre,
//
//
//    ]);


    //
//    return redirect()->back();
//});
// دالة العرض
//Route::get('app',function (){
//   $tasks = DB::table('student-info')->get();
//    return view('app',compact('tasks'));
//});
////التعديل
//
//Route::get('edit/{id}',function (){
//    $contact = DB::table('student-info')->get();
//    return view('edit',compact('contact'));
//});
//Route::get('delete',function ($id){
//   post::destory($id);
//});

//Route::put('edit/{id}',[PtcController::class,'edit']);
//Route::patch('update/{id}',[PtcController::class,'update']);
//Route::post('destroy/{id}',[PtcController::class,'destroy']);

// جدول  اضافةالاخوة
//Route::get('/create',function (){
//    return view('form');
//});
//
//Route::post('/brother',function (Request $request){
//
//    DB::table('brother-univ')->insert([
//
//        'bro_name'    => $request ->bro_name,
//        'bro_college'  => $request ->bro_college,
//        'bro_level'    => $request ->bro_level,
//        'bro_get_help'=> $request ->bro_get_help,
//        'bro_aid' => $request ->bro_aid,
//        'bro_notes' => $request ->bro_notes,
//
//    ]);
//
//    return redirect()->back();
//});













//Route::post('/create',function (){
//    $PtcModel = new PtcModel();
//    $PtcModel->Stdno =request('Stdno');
//    $PtcModel->Stdname =request('Stdname');
//    $PtcModel->Stdid =request('Stdid');
//    $PtcModel->Stdspeeid =request('Stdspeeid');
//    $PtcModel->Genderid =request('Genderid');
//    $PtcModel->Stntasid =request('Stntasid');
//    $PtcModel->Addres =request('Addres');
//    $PtcModel->Jawno =request('Jawno');
//    $PtcModel->Telno =request('Telno');
//    $PtcModel->Calender =request('Calender');
//    $PtcModel->Addresstat =request('Addresstat');
//    $PtcModel->Addrescity =request('Addrescity');
//    $PtcModel->Brounivcant =request('Brounivcant');
//    $PtcModel ->save();
//
//
//
//});
//Route::post('/create',function (Request $request)
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
//
//    ]);
//    return redirect()->back();
//
//
//
//});
//Route::post('/create',function (Request $request)
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
//        'Brounivcant' => $request ->Brounivcant,
//
//    ]);
//    DB::table('_financial')->insert([
//
////        'stdno'    => $request ->Stdno,
////        'caleder'  => $request ->caleder,
//        'Semfees'    => $request ->Semfees,
//        'Acafee'=> $request ->Acafee,
//
//    ]);
//    DB::table('exemption')->insert([
//
//        'Extype'    => $request ->Extype,
//        'Exrate'  => $request ->Exrate,
//        'ExWalue'    => $request ->ExWalue,
//
//    ]);
//    DB::table('family')->insert([
//
////        'Stdno'    => $request ->Stdno,
////        'caleder'  => $request ->caleder,
//        'BrName'    => $request ->BrName,
//        'Age'=> $request ->Age,
//        'levalace' => $request ->levalace,
//        'work' => $request ->workf,
//        'salary'   => $request ->salaryf,
//        'HelpfulValue'    => $request ->HelpfulValue,
//        'Telno'    => $request ->Telno,
//        'nots' => $request ->nots,
//        'HealthStatusid' => $request ->HealthStatusid,
//        'TypeDisabilityid' => $request ->TypeDisabilityid,
//        'Doc' => $request ->Doc,
//        'Kindshiplint' => $request ->Kindshiplint,
//        'workPlace' => $request ->workPlace,
//        'idrvo' => $request ->idrvo,
//        'Guardian' => $request ->Guardian,
//    ]);
//    DB::table('_variabledata')->insert([
//
////        'Stdno'    => $request ->Stdno,
////        'caleder'  => $request ->caleder,
//        'work'    => $request ->work,
//        'Salary'=> $request ->Salary,
////        'Approvpd' => $request ->Approvpd,
////        'AppraudSud' => $request ->AppraudSud,
////        'Reslt'   => $request ->Reslt,
////        'StudentStatus'    => $request ->StudentStatus,
////        'FinancialAdoption'    => $request ->FinancialAdoption,
//
//    ]);
//    DB::table('_living')->insert([
//
////        'Stdno'    => $request ->Stdno,
////        'caleder'  => $request ->caleder,
//        'HouseType'    => $request ->HouseType,
////        'Doc'=> $request ->Doc,
//
//    ]);
//    DB::table('_familyproperty')->insert([
//
////        'Stdno'    => $request ->Stdno,
////        'caleder'  => $request ->caleder,
//        'Typeid'    => $request ->Typeid,
////        'Doc'=> $request ->Doc,
//
//    ]);
//    DB::table('_brothersuniversi')->insert([
//
//        'Stdno'    => $request ->Stdno,
//        'caleder'  => $request ->caleder,
//        'Name'    => $request ->Name,
//        'Univid'=> $request ->Univid,
//        'Level' => $request ->Level,
//        'aid' => $request ->aid,
//        'nots'   => $request ->nots,
//        'Doc'    => $request ->Docbro,
//
//
//    ]);
//    DB::table('calender')->insert([
//
//        'id'    => $request ->id,
//        'Caleder'  => $request ->Caleder,
//        'Calederno'    => $request ->Calederno,
//        'Calederid'=> $request ->Calederid,
//        'SemeleYers' => $request ->SemeleYers,
//        'SemestrStatus' => $request ->SemestrStatus,
//
//
//
//    ]);
//    return redirect()->back();
//
//
//
//});
//Route::get('create',function (){
//    $task =DB::table('_brothersuniversi')->get();
//    return view('form' ,compact(_brothersuniversi));
//
//
//});





//Route::view('add','addmember');
//Route::post('add',[PtcController::class,'addDate']);
