<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
     

    public function index()
    {
    	return view('admin/index');
    }
    public function properties()
    {
    	return view('admin/prop');
    }
     public function profile()
    {
        
    	return view('admin/profile');
    }

}
