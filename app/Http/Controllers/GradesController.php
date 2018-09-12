<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;


class GradesController extends Controller
{
     public function getGrades(){

        $grades = DB::table('cijfers')->get();
       return view('/Grades', ['grades'=>$grades]);
  
    }
}
