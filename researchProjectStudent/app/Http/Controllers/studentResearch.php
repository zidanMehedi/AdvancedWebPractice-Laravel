<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentResearch extends Controller
{
     public function index(){
    	return view('student.myResearch.index');
    }
}