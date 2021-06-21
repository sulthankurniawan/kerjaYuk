<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\Experience;
use App\Models\Expertice;
use App\Models\Request as Job_Request;

class RequestController extends Controller
{
    public function index() {
        // get requests by user id

        $requests = Job_Request::join('users', 'users.id', '=', 'requests.user_id')
                        ->join('jobs', 'jobs.id', '=', 'requests.job_id')
                        ->select('jobs.*', 'jobs.id as job_id', 'users.company', 'requests.*', 'requests.id as request_id')
                        ->where('requests.user_id', '=', Auth::user()->id)
                        ->get();

        return view('requests.history', ['requests' => $requests]);
    }

    public function create($job_id) {

        $job = Job::join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->where('jobs.id', '=', $job_id)
                    ->first();

        $experiences = Experience::where('user_id', '=', Auth::user()->id)->get();

        $expertices = Expertice::where('user_id', '=', Auth::user()->id)->get();

        $applicants = Job_Request::join('users', 'users.id', '=', 'requests.user_id')
                        ->join('jobs', 'jobs.id', '=', 'requests.job_id')
                        ->select('requests.id')
                        ->where('jobs.id', '=', $job_id)
                        ->get();

        return view('requests.create', [
            'job' => $job,
            'experiences' => $experiences,
            'expertices' => $expertices,
            'total_applicants' => count($applicants),
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $request = Job_Request::join('users', 'users.id', '=', 'requests.user_id')
                        ->select('users.first_name', 'users.last_name', 'users.email', 'users.phone', 'requests.link', 'requests.id')
                        ->where('requests.id', '=', $id)
                        ->first();

        $experiences = Experience::join('users', 'users.id', '=', 'experiences.user_id')
                        ->join('requests', 'requests.user_id', '=', 'experiences.user_id')
                        ->select('experiences.*')
                        ->where('requests.user_id', '=', 'experiences.user_id')
                        ->get();

        $expertices = Expertice::join('users', 'users.id', '=', 'expertices.user_id')
                        ->join('requests', 'requests.user_id', '=', 'expertices.user_id')
                        ->select('expertices.*')
                        ->where('requests.user_id', '=', 'expertices.user_id')
                        ->get();

        return view('requests.show', [
            'request' => $request,
            'experiences' => $experiences,
            'expertices' => $expertices,
        ]);
    }

    public function detail($id)
    {
        $request = Job_Request::findOrFail($id);

        return view('requests.detail', [
            'request' => $request,
        ]);
    }

    public function respond($id) {

        $request = Job_Request::findOrFail($id);
        $request->respond = request('respond');

        $request->update();

        return redirect('/')->with('mssg', 'Respon telah terkirim');
    }

    public function wishlist($id) {

        $request = Job_Request::findOrFail($id);
        

        if ($request->wishlist == '0') {
            $request->wishlist = '1';
            $request->update();
            return redirect("jobs/detail/$request->job_id")->with('mssg', 'Pelamar telah ditambah ke wishlist');
        }
        elseif ($request->wishlist == '1') {
            $request->wishlist = '0';
            $request->update();
            return redirect("jobs/detail/$request->job_id")->with('mssg', 'Pelamar telah dikeluarkan dari wishlist');
        } 
    }

    public function store() {

        $request = new Job_Request();

        // request disini maksudnya lamaran, dan yg satu lagi seperti biasa yaitu mengambil post (ambigu)
        $request->user_id = Auth::user()->id;
        $request->job_id = request('job_id');
        $request->link = request('link');
        $request->pitch = request('pitch');
        $request->wishlist = '0';

        $request->save();

        return redirect('/home-seeker')->with('mssg', 'Lamaran telah tersimpan');
    }

    // public function destroy($id) {
    //     $job = Job::findOrFail($id);
    //     $job->delete();

    //     return redirect('/');
    // }

    // add few more functions
}


