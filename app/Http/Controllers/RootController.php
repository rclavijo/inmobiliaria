<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootController extends Controller
{
    //
    public function index()
    {
    	return view('root/index');
    }
    public function createadm()
    {
    	return view('root/createadmon');
    }
}
