<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    
    function login_alumni(){
        return view ('login_alumni');
    }
    function auth(Request $request){
        $credentials = $request->validate([
            'nisn' => 'required|string',
            'password' => 'required|string|max:6',
        ]);
        if (Auth::guard('alumni')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('page');
        }
        
    }
    function logout(){
        Auth::logout();
        return redirect()->route('login_user');
    }    

}
