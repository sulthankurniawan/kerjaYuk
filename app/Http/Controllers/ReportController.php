<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    public function index() {
        // get data from db

        $informations = Information::all();

        return view('informations.index', [
            'informations' => $informations,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record

        $information = Information::findOrFail($id);

        return view('informations.show', ['information' => $information]);
    }

    public function create() {
        return view('informations.create');
    }

    public function store() {

        $information = new Information();

        $information->id_user = request('title');
        $information->alamat = request('content');
        $information->posisi_loker = request('image');

        $information->save();

        return redirect('/')->with('mssg', 'Informasi telah tersimpan');
    }

    public function destroy($id) {
        $information = Information::findOrFail($id);
        $information->delete();

        return redirect('/');
    }
}
