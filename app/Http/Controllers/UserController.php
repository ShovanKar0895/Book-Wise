<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fetch_all_users(){
       $sadsad = User::where('name','Test User')->first();
       echo $sadsad;
   }
}
