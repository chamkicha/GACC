<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function signin(){
        return view('admin.auth.signin');
    }



    public function login(Request $request){
                // dd($request);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard'); 
        }
    
        return redirect()->route('login')->withErrors(['error' => 'Invalid email or password']);
          
    
    }




    public function logout(){
        
    }
}
