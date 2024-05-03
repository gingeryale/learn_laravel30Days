<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        // dd(request()->all());
        // validate, attempt to login, create session, redirect to login view
        $validationAttr = request()->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);
        if(! Auth::attempt($validationAttr)){
            throw ValidationException::withMessages([
                'email'=>'Sorry, credentials did not match'
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
