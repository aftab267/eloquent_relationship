<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\phone;
use App\Http\Controllers\usercontroller;




Route::get('/',[usercontroller::class,'show']);
Route::get('/all',[usercontroller::class,'index']);
