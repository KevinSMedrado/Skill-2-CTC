<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);

        $users->save();

        Auth::login($users);

        return redirect("/index");
    }

    public function login(Request $request)
{
    $credentials = [
        "email" => $request->email,
        "password" => $request->password,
    ];

    if (Auth::attempt($credentials, true)) {
        $request->session()->regenerate();

        $user = Auth::user();
        $token = $user->createToken('LoginToken')->plainTextToken;
        return redirect('index');

    } else {
        return redirect("login")->with('error', 'Invalid credentials');
    }

    
}public function logout(Request $request)
{
    $user = $request->user();

    if($user){
        $user->tokens()->delete();
    }else{
        return redirect('index')->withErrors(['User not authenticated']);
    }
    
    return redirect('login');
}
}

   