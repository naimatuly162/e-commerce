<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request)
    {
        //return $request->input();
        $user = User::where(['email'=>$request->email])->first();
      
    }
}
