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
    public function index() 
    {
        if (Auth::user()->role == 'admin')
        {
            $jobs = Job::join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->get();
            return view('jobs.manage', [
                'jobs' => $jobs,
            ]);
        }
        else 
        {
            $jobs = Job::join('users', 'users.id', '=', 'jobs.user_id')
                    ->select('jobs.*', 'users.company')
                    ->where('jobs.status', '=', 'active')
                    ->Where('jobs.display', '=', 'Tampilkan')
                    ->get();
            return view('jobs.seeker.find', [
                'jobs' => $jobs,
                'career' => '',
            ]);
        }
        
    }

    public function showByCareer($number) 
    {

        $career = '';

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

        $jobs = Job::join('users', 'users.id', '=', 'jobs.user_id')
                ->where('jobs.career', '=', $career)
                ->where('jobs.display', '=', 'Tampilkan')
                ->where('jobs.status', '=', 'active')
                ->select('jobs.*', 'users.company')
                ->latest()
                ->get();;
    
        return view('jobs.seeker.find', [
            'jobs' => $jobs,
            'career' => $career,
        ]);

    }

    public function create() 
    {
        return view('jobs.company.create');
    }

    public function show($id) 
    {
        // use the $id variable to query the db for a record
        
        $job = Job::join('users', 'users.id', '=', 'jobs.user_id')
                ->select('jobs.*', 'users.company', 'users.about_company')
                ->where('jobs.id', '=', $id)
                ->first();

        $applicants = Job_Request::join('users', 'users.id', '=', 'requests.user_id')
                        ->join('jobs', 'jobs.id', '=', 'requests.job_id')
                        ->select('users.id')
                        ->where('requests.job_id', '=', $id)
                        ->get();

        $requests = Job_Request::where('user_id', '=', Auth::user()->id)
                        ->where('job_id', '=', $id)
                        ->select('id')
                        ->get();

        return view('jobs.seeker.show', ['job' => $job, 'applicants' => $applicants, 'requests' => $requests]);
    }

    public function search()
    {
        // if (request('min_salary') == '')
        //     $min_salary = 0;
        // else
        //     $min_salary = request('min_salary');

        // if (request('max_salary') == '')
        //     $max_salary = 999999999999999;
        // else
        //     $max_salary = request('max_salary');

        $jobs = Job::where('area', '=', request('area'))
                    // ->where('min_salary', '<', $min_salary)
                    // ->where('max_salary', '>', $max_salary)
                    ->where('type', '=', request('type'))
                    ->where('education', '=', request('education'))
                    // ->where('majors', 'LIKE', request('major'))
                    ->select('*')
                    ->get();

        return view('jobs.seeker.find', [
            'jobs' => $jobs,
            'career' => '',
        ]); 
    }

    public function detail($id)
    {
        $job = Job::where('user_id', '=', Auth::user()->id)
                    ->where('id', '=', $id)
                    ->first();

        $applicants = Job_Request::join('users', 'users.id', '=', 'requests.user_id')
                        ->join('jobs', 'jobs.id', '=', 'requests.job_id')
                        ->select('users.id as user_id','users.first_name', 'users.email', 'users.phone', 'users.institution', 'users.major', 'requests.wishlist', 'requests.id as request_id')
                        ->where('jobs.id', '=', $id)
                        ->get();

        return view('jobs.company.show', ['job' => $job, 'applicants' => $applicants]);
    }

    public function edit($id) {
        $job = Job::findOrFail($id);

        return view('jobs.company.edit', ['job' => $job,]);
    }

    public function store() 
    {

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

    public function update($id) 
    {

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

    public function display($id)
    {
        $job = Job::findOrFail($id);

        if ($job->display == 'Tampilkan') {
            $job->display = 'Sembunyikan';
            $job->update();
            return redirect()->route('jobs.detail', $id)->with('mssg', 'Lowongan telah disembunyikan');
        }
        elseif ($job->display == 'Sembunyikan') {
            $job->display = 'Tampilkan';
            $job->update();
            return redirect()->route('jobs.detail', $id)->with('mssg', 'Lowongan telah ditampilkan');
        } 
    }

    public function suspend($id) 
    {
        $job = Job::findOrFail($id);

        if ($job->status == 'active') {
            $job->status = 'suspended';
            $job->update();
            return redirect("/home-admin")->with('mssg', 'Lowongan telah di suspend');
        }
        elseif ($job->status == 'suspended') {
            $job->status = 'active';
            $job->update();
            return redirect("/home-admin")->with('mssg', 'Lowongan telah di aktifkan');
        } 
    }

    public function destroy($id) 
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/home-company');
    }
}

