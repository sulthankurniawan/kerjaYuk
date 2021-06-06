<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Request as Job_Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $jobs = Job::latest()->limit(10)->get();

        return view('welcome', [
            'job' => $jobs,
        ]);
    }

    public function seeker()
    {
        $jobs = Job::latest()->limit(10)->get();
        $request = Job_Request::latest()->get();

        return view('dashboard.seeker', [
            'job' => $jobs,
        ]);
    }

    public function company()
    {

    }

    public function admin()
    {
        
    }
}
