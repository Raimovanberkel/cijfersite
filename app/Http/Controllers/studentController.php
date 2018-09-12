<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function setUserSession(){

        $userSession = DB::table('users')->get();
       return view('/cijfers', ['grades'=>$grades]);
  
    }
    
}
