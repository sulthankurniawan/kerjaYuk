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
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'nama_perusahaan' => ['string', 'max:255'],
    //         'jenis_industri' => ['string', 'max:255'],
    //         'tentang_perusahaan' => ['string'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'phone' => ['string', 'max:12'],
    //         'role' => ['string'],
    //         'status' => ['string'],
    //         'credibility' => ['string'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function createSeeker(array $data)
    protected function createSeeker()
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'phone' => $data['phone'],
        //     'role' => 'seeker',
        //     'status' => $data['status']
        // ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->role = 'seeker';
        $user->status = request('status');

        $user->save();

        return redirect('/login')->with('mssg', 'Pengguna telah terdaftar sebagai pencari lowongan');
    }

    // protected function createCompany(array $data)
    protected function createCompany()
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'nama_perusahaan' => $data['nama_perusahaan'],
        //     'jenis_industri' => $data['jenis_industri'],
        //     'tentang_perusahaan' => $data['tentang_perusahaan'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'phone' => $data['phone'],
        //     'role' => 'company',
        //     'status' => $data['status']
        // ]);

        $user = new User();

        $user->name = request('name');
        $user->nama_perusahaan = request('nama_perusahaan');
        $user->jenis_industri = request('jenis_industri');
        $user->tentang_perusahaan = request('tentang_perusahaan');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->role = 'company';
        $user->status = request('status');

        $user->save();

        return redirect('/login')->with('mssg', 'Pengguna telah terdaftar sebagai pencari lowongan');
    }
}
