<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\phone;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(){
        $usercon=User::all();
        return $usercon;
    }
}
