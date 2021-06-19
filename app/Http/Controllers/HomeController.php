<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        // get 10 newest jobs where display open and not suspended
        $jobs = Job::join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->limit(10)
                    ->where('jobs.status', '=', 'active')
                    ->Where('jobs.display', '=', 'Tampilkan')
                    ->get();

        return view('welcome', [
            'jobs' => $jobs,
        ]);
    }

    public function welcomeCompany()
    {
        return view('welcome-company');
    }

    public function seeker()
    {
        // get 10 newest jobs where display shown and not suspended
        $jobs = Job::join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->limit(10)
                    ->where('jobs.status', '=', 'active')
                    ->where('jobs.display', '=', 'Tampilkan')
                    ->get();

        return view('dashboard.seeker', [
            'jobs' => $jobs,
        ]);
    }

    public function company()
    {
        $jobs = Job::where('user_id', '=', Auth::user()->id)
                    ->get();
        return view('dashboard.company', ['jobs' => $jobs]);
    }

    public function admin()
    {
        
    }
}
