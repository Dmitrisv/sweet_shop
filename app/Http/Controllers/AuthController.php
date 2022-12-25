<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function create(){
        return view('reg');
    }

    public function store(Request $request){    

    $request->validate([
        'password' => ['required', 'confirmed'],
    ]);
    $user = User::query()->create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'name' => $request->name,
        'surname' => $request->surname,
        'patronymic' => $request->patronymic,
    ]);
       Auth::login($user,true);
       return redirect("/");
    }


    public function getformlogon(){
        return view("auth");
    }

    public function log(Request $request)
    {
        $user = [
            'username'=> $request->username,
            'password'=> $request->pass,
        ];
        if(Auth::attempt($user)){
            return redirect()->intended('/');
        }
        return "Invalid creditinals";
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/about');
    }

}
