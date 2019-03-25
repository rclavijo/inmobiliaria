<?php

namespace App\Http\Controllers\Auth;

use App\{User,Person,Company};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   protected function validator(array $data)
    {
        if($data['rol'] == 'seller_person')
        {
            return Validator::make($data, [
            
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'lastname'=> 'required',
            'name' => 'string|max:255|required',
            'identification'=> 'required|unique:persons',
            'phone'=>'required|unique:users',
        ]);

        }
        else
        {
             return Validator::make($data, [
            
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'business_name' => 'string|max:255|required',
            'nit'=> 'required|unique:companies',
            'phone'=>'required|unique:users',
        ]);
        }
 
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone'=> $data['phone'],
            'rol'=> $data['rol'],
        ]);
        if ($data['rol'] == 'seller_person') {
             Person::create([

            'user_id'=>$user->id,
            'name'=>$data['name'],
            'lastname'=>$data['lastname'],
            'identification'=>$data['identification'],

        ]);
            
        }
        else
        {
            Company::create(
            [
                'user_id'=>$user->id,
                'business_name'=>$data['business_name'],
                'nit'=>$data['nit'],

            ]);

        }

       

        return $user;


        
    }
}
