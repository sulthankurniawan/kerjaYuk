<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('jobs.create');
    }

    public function store() {

        $job = new Job();

        $job->id_user = request('id_user');
        $job->alamat = request('alamat');
        $job->posisi_loker = request('posisi_loker');
        $job->deskripsi = request('deskripsi');
        $job->tingkat_jabatan = request('tingkat_jebatan');
        $job->pendidikan = request('pendidikan');
        $job->pengalaman = request('pengalaman');
        $job->gaji = request('gaji');
        $job->tunjangan = request('tunjangan');
        $job->status = request('status');

        $job->save();

        return redirect('/')->with('mssg', 'Informasi lowongan telah tersimpan');
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/');
    }
}
