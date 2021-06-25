<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    public function index($object, $id) 
    {
        // get data from db

        if ($object == 'users')
        {
            return view('users.report', ['user_id' => $id]);
        }
        elseif ($object == 'jobs')
        {
            return view('jobs.report', ['job_id' => $id]);
        }
    }

    public function showJob($report_id, $whistleblower_id, $reported_job_id) 
    {

        $report = Report::findOrFail($report_id);

        $whistleblower = Report::join('users', 'users.id', '=', 'reports.whistleblower_id')
                            ->select('users.first_name', 'users.email', 'users.phone')
                            ->where('reports.whistleblower_id', '=', $whistleblower_id)
                            ->where('reports.id', '=', $report_id)
                            ->first();
        
        $reported_job = Report::join('jobs', 'jobs.id', '=', 'reports.reported_job_id')
                            ->join('users', 'users.id', '=', 'jobs.user_id')
                            ->select('jobs.name', 'users.company', 'users.email', 'users.phone')
                            ->where('reports.reported_job_id', '=', $reported_job_id)
                            ->where('reports.id', '=', $report_id)
                            ->first();

        return view('reports.jobs.show', [
            'report' => $report,
            'whistleblower' => $whistleblower,
            'reported_job' => $reported_job,
        ]);
    }

    public function showUser($report_id, $whistleblower_id, $reported_user_id) 
    {

        $report = Report::findOrFail($report_id);

        $whistleblower = Report::join('users', 'users.id', '=', 'reports.whistleblower_id')
                            ->select('users.first_name', 'users.email', 'users.phone')
                            ->where('reports.whistleblower_id', '=', $whistleblower_id)
                            ->where('reports.id', '=', $report_id)
                            ->first();
        
        $reported_user = Report::join('users', 'users.id', '=', 'reports.reported_user_id')
                            ->select('users.first_name', 'users.email', 'users.phone')
                            ->where('reports.reported_user_id', '=', $reported_user_id)
                            ->where('reports.id', '=', $report_id)
                            ->first();

        return view('reports.users.show', [
            'report' => $report,
            'whistleblower' => $whistleblower,
            'reported_user' => $reported_user,
        ]);
    }

    public function store($object) 
    {
        $report = new Report();

        if ($object == 'users')
        {
            $report->whistleblower_id = Auth::user()->id;
            $report->reported_user_id = request('reported_user_id');
            $report->category = request('category');
            $report->description = request('description');
        }
        elseif ($object == 'jobs')
        {
            $report->whistleblower_id = Auth::user()->id;
            $report->reported_job_id = request('reported_job_id');
            $report->category = request('category');
            $report->description = request('description');
        }

        $report->save();

        return redirect('/')->with('mssg', 'Report telah terkirim');
    }

    public function destroy($id) 
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect('/home-admin');
    }
}
