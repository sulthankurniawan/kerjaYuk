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
        // get 10 newest jobs
        $jobs = DB::table('jobs')
                    ->join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->limit(10)
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
        // get 10 newest jobs
        $jobs = DB::table('jobs')
                    ->join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->limit(10)
                    ->get();

        

        return view('dashboard.seeker', [
            'jobs' => $jobs,
        ]);
    }

    public function company()
    {
        return view('dashboard.company');
    }

    public function admin()
    {
        
    }
}
