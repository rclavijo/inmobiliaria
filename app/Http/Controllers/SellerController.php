<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Company;


class SellerController extends Controller
{
    //

 
public function index ()
{
	return view('seller.properties');
}

public function profile()
{
	$dato = auth()->user()->id;
	$rol = auth()->user()->rol;

	if ($rol == 'seller_person')
		$dato = Person::where('user_id',$dato)->get();
	else
		$dato = Company::where('user_id',$dato)->get();

	return view('seller/profile')->with('user',$dato);
}
public function napartment()
{
	return view('seller.apartamento');
}
public function ncellar()
{
	return view('seller/ncellar');
}
public function nbatch()
{
	return view('seller/nbatch');
}
public function nhouse ()
{
	return view('seller/nhouse');
}
public function nfarm ()
{
	return view('seller/nhouse');
}
public function properties ()
{
	return view('seller/pproperties');
}
public function editname()
{
	$id=auth()->user()->id; 
	$rol = auth()->user()->rol;
	if ($rol == 'seller_person')
		$user = Person::where('user_id',$id)->get();
	else
		$user = Company::where('user_id',$id)->get();	

	return view('seller.editname')->with('user',$user);
}
 public function updatename(Request $request)
 {

	$rol = auth()->user()->rol;
	$id=auth()->user()->id; 

	if ($rol == 'seller_person')
	 {

		$person = Person::where('user_id',$id)->get();
		$person->name = $request->name;
		$person->save();
	}
	else
	{
		$company = Company::where('user_id',$id)->get();
		$company->name = $request->name;
		$company->save();

	}
 }
}
