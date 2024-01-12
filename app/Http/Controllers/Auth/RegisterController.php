<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
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
    | validation and creation. By default, this controller uses a trait to
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'title' => $data['title'],
            'occupation' => $data['job'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'country' => $data['country'],
            'birthday_date' => $data['birthday_date'],
            'gender' => $data['gender'],
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'working_status' => $data['working_status'],
            'company_name' => $data['company_name'],
            'work_address' => $data['work_address'],
            'work_city' => $data['work_city'],
            'work_province' => $data['work_province'],
            'work_tel' => $data['work_tel'],
            'home_address' => $data['home_address'],
            'home_city' => $data['home_city'],
            'home_province' => $data['home_province'],
            'home_tel' => $data['home_tel'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => 0,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);
    }*/
}
