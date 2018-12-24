<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function signupview()
    {
    	return view('signup');
    }

    public function loginview()
    {
    	return view('login');
    }

    public function home(Request $req)
    {
    	
    	/*echo "<pre>";
    	print_r($req->data);
    	exit();*/
    	return view('home')
    	     ->with([
    	     	'data' => $req->data,
    	     	'user' => $req->user 
    	     ]);
    }

}
