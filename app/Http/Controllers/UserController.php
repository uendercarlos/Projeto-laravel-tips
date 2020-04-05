<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function listUser()
    {
       
           $user = User::where('id', '=', 2)->first();
           //dd($user);
           return view('listUser', ['user' => $user]);
    }   
}

