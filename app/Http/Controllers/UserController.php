<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\programs;
use App\Models\user_types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){


        return view('register.register');


    }
    public function registerPost(Request $request)
    {

        $user = new User();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->fname = $request->firstname;
        $user->mname = $request->midname;
        $user->lname = $request->lastname;
        $user->save();

        $user_types = new user_types();
        $user_types->name = $request->usertypesname;
        $user_types->save();

        $programs = new programs();
        $programs->name = $request->programs;
        $programs->save();




        return back()->with('success','Register Successfully');

    }



}


