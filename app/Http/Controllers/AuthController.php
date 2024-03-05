<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request){

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return response()->json(['message'=>'Authenticated','redirect'=>'/'],200);
     
        }
        else{
            
            return response()->json(['message'=>'Unauthorized'],401);

        }

    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email= $request->input('email');
        $user->password=$request->input('password');
        $user->save();
        
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
