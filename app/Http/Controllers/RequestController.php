<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index() {
        // get data from db

        $requests = Request::all();

        return view('requests.index', [
            'requests' => $requests,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $request = Request::findOrFail($id);

        return view('requests.show', ['request' => $request]);
    }

    public function create() {
        return view('requests.create');
    }

    public function store() {

        $request = new Request();

        // request disini maksudnya lamaran, dan yg satu lagi seperti biasa yaitu mengambil post (ambigu)
        $request->id_user = request('id_user');
        $request->id_job = request('id_job');
        $request->lampiran = request('lampiran');

        $request->save();

        return redirect('/')->with('mssg', 'Lamaran telah tersimpan');
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/');
    }

    // add few more functions
}
