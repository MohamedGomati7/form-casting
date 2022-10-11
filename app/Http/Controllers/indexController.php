<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    Public function index(){

        return view('index');
    }

    public function apply(){
        
      $applicant->name = request('name');
      $applicant->phoneNumber = request('phoneNumber');
      $applicant->dob = request('dob');
      $applicant->gender = request('gender');
      $applicant->city = request('city');
      $applicant->act = request('act');
      $applicant->file = request()->file('file') ? request()->file('file')->store('public') : null;
      $applicant->desire = request('desire');

      $applicant->save();
      return redirect('/')->with('success','Thank you!');
    }
}
