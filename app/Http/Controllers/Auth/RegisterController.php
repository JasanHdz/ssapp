<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:44'],
            'lastName' => ['required', 'string', 'max:44'],
            'secondLastName' => ['required', 'string', 'max:44'],
            'phone'    => ['required', 'digits:10'],
            'keyOne'   => ['required', 'digits_between:1,18'],
            'keyTwo'   => ['required', 'string', 'max:18'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'street'   => ['required', 'string', 'max:44'],
            'outdoor'  => ['required', 'string', 'max:44'],
            'interior' => ['string', 'max:44'],
            'suburb'   => ['required', 'string', 'max:44'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'             => $data['name'],
            'last_name'        => $data['lastName'],
            'second_last_name' => $data['secondLastName'],
            'key_one'          => $data['keyOne'],
            'key_two'          => $data['keyTwo'],
            'phone'            => $data['phone'],
            'street'           => $data['street'],
            'suburb'           => $data['suburb'],
            'outdoor_number'   => $data['outdoor'],
            'interior_number'  => $data['interior'],
            'email'            => $data['email'],
            'password'         => Hash::make($data['password']),
        ]);
    }
}
