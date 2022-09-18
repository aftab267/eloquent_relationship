<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\phone;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function show(){
    $phone=User::find(1);
    $phone=User::find(2)->phone;
    //return $phone;

    $user=phone::find(1);
    $user=phone::find(1)->user;
    //return $user;
    $users=User::all();
    //return $users;

    return view('welcome',compact('users'));
}
public function index(){
    $usercon=phone::all('user_id','name');
    return $usercon;
}
}
