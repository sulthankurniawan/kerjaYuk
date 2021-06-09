<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Request as Job_Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index() {
        // get data from db

        $jobs = Job::latest()->get();

        return view('jobs.seeker.find', [
            'jobs' => $jobs,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $job = Job::findOrFail($id);
        $applicants = DB::table('requests')
                        ->join('users', 'users.id', '=', 'requests.user_id')
                        ->join('jobs', 'jobs.id', '=', 'requests.job_id')
                        ->select('users.id','users.first_name', 'users.email', 'users.phone', 'users.institution', 'users.major', 'requests.*')
                        ->where('jobs.id', '=', $id)
                        ->get();

        return view('jobs.company.show', ['job' => $job, 'applicants' => $applicants]);
    }

    public function create() {
        return view('jobs.company.create');
    }

    public function store() {

        $job = new Job();

        $job->user_id = Auth::user()->id;
        $job->name = request('name');
        $job->location = request('location');
        $job->area = request('area');
        $job->location_link = request('location_link');
        $job->career = request('career');
        $job->type = request('type');
        $job->min_salary = request('min_salary');
        $job->max_salary = request('max_salary');
        $job->workhour_start = request('workhour_start');
        $job->workhour_end = request('workhour_end');
        $job->workday_start = request('workday_start');
        $job->workday_end = request('workday_end');
        $job->job_state = request('job_state');
        $job->education = request('education');
        $job->majors = request('majors');
        $job->experience = request('experience');
        $job->responsibility = request('responsibility');
        $job->submission = request('submission');
        $job->other = request('other');
        $job->status = 'active';

        $job->save();

        return redirect('/home-company')->with('mssg', 'Informasi lowongan telah tersimpan');
    }

    public function edit($id) {

        $job = Job::findOrFail($id);

        $job->user_id = Auth::user()->id;
        $job->name = request('name');
        $job->location = request('location');
        $job->area = request('area');
        $job->location_link = request('location_link');
        $job->career = request('career');
        $job->type = request('type');
        $job->min_salary = request('min_salary');
        $job->max_salary = request('max_salary');
        $job->workhour_start = request('workhour_start');
        $job->workhour_end = request('workhour_end');
        $job->workday_start = request('workday_start');
        $job->workday_end = request('workday_end');
        $job->job_state = request('job_state');
        $job->education = request('education');
        $job->majors = request('majors');
        $job->experience = request('experience');
        $job->responsibility = request('responsibility');
        $job->submission = request('submission');
        $job->other = request('other');

        $job->update();

        return redirect('/home-company')->with('mssg', 'Informasi lowongan telah diubah');
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/');
    }
}
