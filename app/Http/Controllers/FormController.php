<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    
    public function insert(Request $request)
{
    $email = $request->post('email');
    $password = $request->post('password');
    DB::table('forms')->insert(array(['email'=>$email,'password'=>$password]));
    $msg = "veri kadedildi";
    return $msg;
}


    public function show(Request $request)
{
   $Arr['Data'] = DB::table('forms')->get();
   return view('show',$Arr);
}


    public function edit(Request $request,$id)
{
    $Arr['Data'] = DB::table('forms')->where(['id'=>$id])->get();
   return view('edit',$Arr);
}


    public function update(Request $request,$id)
{
    $email = $request->post('email');
    $password = $request->post('password');
    $Arr['Data'] = DB::table('forms')->where(['id'=>$id])->update(['email'=>$email,'password'=>$password]);
    $msg = "Data güncellendi";
   return redirect('/');
}

    public function delete(Request $request,$id)
{
    DB::table('forms')->where(['id'=>$id])->delete();
    return redirect('/');
}



}
