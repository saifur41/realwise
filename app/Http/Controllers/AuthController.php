<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   
    public function adminLogin(Request $request)
    {
        $email = $request->input('email'); 
        $password = $request->input('password');
         
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password,'status' => 1]))
        {
            return redirect('dashboard')->with('success', 'Success: You have successfully logged in.');
           
        }
        else
           return redirect('login')->with('success', 'You entered wrong username/password.');
         
    }
   
    public function logout(Request $request)
    {
      
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return  redirect('login');
    }
    
   
}


