<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Request as Job_Request;

class JobController extends Controller
{
    public function index() {
        // get data from db
        $jobs = Job::latest()->get();
    
        return view('jobs.seeker.find', [
            'jobs' => $jobs,
            'career' => '',
        ]);
    }

    public function getByCareer($number) {

        switch($number){
            case '1':
                $career = 'Agriculture, Food and Natural Resources';
                break;
            case '2':
                $career = 'Architecture and Construction';
                break;
            case '3':
                $career = 'Arts, Audio/Video Technology and Communications';
                break;
            case '4':
                $career = 'Business Management and Administration';
                break;
            case '5':
                $career = 'Education and Training';
                break;
            case '6':
                $career = 'Finance';
                break;
            case '7':
                $career = 'Government and Public Administration';
                break;
            case '8':
                $career = 'Health Science';
                break;
            case '9':
                $career = 'Hospitality and Tourism';
                break;
            case '10':
                $career = 'Human Services';
                break;
            case '11':
                $career = 'Information Technology & Software';
                break;
            case '12':
                $career = 'Law, Public Safety, Corrections and Security';
                break;
            case '13':
                $career = 'Manufacturing';
                break;
            case '14':
                $career = 'Marketing, Sales and Service';
                break;
            case '15':
                $career = 'Science, Technology, Engineering and Mathematics';
                break;
            case '16':
                $career = 'Transportation, Distribution and Logistics';
                break;
            case '17':
                $career = 'Others';
                break;
        }

        $jobs = DB::table('jobs')->where('career', '=', $career)->latest()->get();
    
        return view('jobs.seeker.find', [
            'jobs' => $jobs,
            'career' => $career,
        ]);

    }

    public function create() {
        return view('jobs.company.create');
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

    public function edit($id) {

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
        $job->skill = request('skill');
        $job->submission = request('submission');
        $job->other = request('other');
        $job->expiration = request('expiration');
        $job->display = request('display');
        $job->status = 'active';

        $job->save();

        return redirect('/home-company')->with('mssg', 'Informasi lowongan telah tersimpan');
    }

    public function update($id) {

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
        $job->skill = request('skill');
        $job->submission = request('submission');
        $job->other = request('other');
        $job->expiration = request('expiration');
        $job->display = request('display');

        $job->update();

        return redirect('/home-company')->with('mssg', 'Informasi lowongan telah diubah');
    }

    public function suspension($id) {

        $job = Job::findOrFail($id);

        if ($job->status == 'active') {
            $job->status = 'suspended';
            $job->update();
            return redirect("")->with('mssg', '');
        }
        elseif ($request->wishlist == 'suspended') {
            $request->wishlist = 'active';
            $request->update();
            return redirect("")->with('mssg', '');
        } 
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/');
    }
}

