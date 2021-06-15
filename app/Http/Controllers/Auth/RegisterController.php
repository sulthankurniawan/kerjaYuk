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

    public function seeker()
    {
        return view('auth.register.seeker');
    }

    public function company()
    {
        return view('auth.register.company');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function createSeeker(array $data)
    protected function createSeeker()
    {
        $user = new User();

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->email = request('email');
        $user->education = request('education');
        $user->institution = request('institution');
        $user->major = request('major');
        $user->min_expectation_salary = request('min_expectation_salary');
        $user->max_expectation_salary = request('max_expectation_salary');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->role = 'seeker';
        $user->status = 'active';

        $user->save();

        return redirect('/login')->with('mssg', 'Pengguna telah terdaftar sebagai pencari lowongan');
    }

    // protected function createCompany(array $data)
    protected function createCompany()
    {
        $user = new User();

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->company = request('company');
        $user->industry = request('industry');
        $user->about_company = request('about_company');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->role = 'company';
        $user->status = 'active';

        $user->save();

        return redirect('/login')->with('mssg', 'Pengguna telah terdaftar sebagai pencari lowongan');
    }
}


