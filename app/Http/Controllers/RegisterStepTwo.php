<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterStepTwo extends Controller
{
    public function create(){

        return view('teacher.profile.register');

    }

    public function store(Request $request){

        auth()->user()->update([

            'dob' => $request->dob,
            'transportation' => $request->transportation,
            'bio'=>$request->bio,
            'experience'=>$request->experience,
            'phone'=>$request->phone,
            'address'=>$request->address,

        ]);

        return redirect()->route('dashboard');

    }
}
