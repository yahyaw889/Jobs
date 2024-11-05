<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }


    public function store()
    {
      $userValidation =  request()->validate([
            'name' => ['required'],
            'email' => ['required' , 'email' , 'unique:users,email'],
            'password' => ['required' , 'confirmed' , Password::min(6)],
        ]);
      $employerValidation =  request()->validate([
            'employer' => ['required'],
            'logo' => ['required' , File::types(['jpg' , 'png' , 'webp'])],
        ]);
        $user = User::create($userValidation);
        $logopath = request()->logo->store('logos');
        $user->employer()->create([
            'name' => $employerValidation['employer'],
            'logo' => $logopath,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
