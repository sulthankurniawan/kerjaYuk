<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as Job_Request;

class RequestController extends Controller
{
    public function index() {
        // get data from db

        $requests = Job_Request::latest()->get();

        return view('requests.index', [
            'requests' => $requests,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $request = Job_Request::findOrFail($id);

        return view('requests.show', ['request' => $request]);
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
            return redirect('{{ route(requests.show, $id) }}')->with('mssg', 'Pelamar telah ditambah ke wishlist');
        }
        elseif ($request->wishlist == '1') {
            $request->wishlist = '0';
            $request->update();
            return redirect('{{ route(requests.show, $id) }}')->with('mssg', 'Pelamar telah dikeluarkan dari wishlist')
        } 
    }

    public function create() {
        return view('requests.create');
    }

    public function store() {

        $request = new Request();

        // request disini maksudnya lamaran, dan yg satu lagi seperti biasa yaitu mengambil post (ambigu)
        $request->user_id = request('user_id');
        $request->job_id = request('job_id');
        $request->link = request('link');
        $request->pitch = request('pitch');
        $request->respond = request('respond');
        $request->wishlist = '0';
        $request-> = 'active';

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


