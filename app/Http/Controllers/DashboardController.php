<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
        public function display(){

            return view('dashboard.dashboard');

        }

        public function loginPost(Request $request){

            $credentials = [
                'email' => $request->email,
                'password' =>$request->password,
            ];


            if (Auth::attempt($credentials)){
                return redirect('/home')->with('success','Login Success');
            }

            return back()->with('error','Email or Password Incorrect');

        }
}
