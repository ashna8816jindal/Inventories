<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index(){
    	$sub="helloo subjects";
    	
    	$marks=[100,200];
    	return view('hello')->with(['subjects'=>$sub]);
    }
}
