<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index() {
        // get data from db

        $jobs = Job::all();

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $job = Job::findOrFail($id);

        return view('jobs.show', ['job' => $job]);
    }

    public function create() {
        return view('jobs.company.create');
    }

    public function store() {

        $job = new Job();

        $job->user_id = Auth::user()->id;
        $job->name = request('name');
        $job->location = request('location');
        $job->type = request('type');
        $job->min_salary = request('min_salary');
        $job->max_salary = request('max_salary');
        $job->workhour_start = request('workhour_start');
        $job->workhour_end = request('workhour_end');
        $job->workday_start = request('workday_start');
        $job->workday_end = request('workday_end');
        $job->job_state = request('job_state');
        $job->education = request('education');
        $job->major = request('major');
        $job->experience = request('experience');
        $job->responsibility = request('responsibility');
        $job->submission = request('submission');
        $job->other = request('other');
        $job->status = request('status');

        $job->save();

        return redirect('/home-company')->with('mssg', 'Informasi lowongan telah tersimpan');
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/');
    }
}
