<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');

    }
    public function store()
    {
        $userValidated = request()->validate([
            'email' => ['required' , 'email'],
            'password' => ['required' , Password::min(6)],
        ]);
        if(! Auth::attempt($userValidated)){
            throw ValidationException::withMessages([
                'email'  => 'Sorry , This credentials is not matched'
            ]);
        }
        request()->session()->regenerate();
            return redirect('/');
    }
    public function destory()
    {
        Auth::logout();
        return redirect('/');
    }
}
