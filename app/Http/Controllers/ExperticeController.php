<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Experience;
use App\Models\Expertice;

class ExperticeController extends Controller
{
    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);
        $experiences = Experience::where('user_id', '=', Auth::user()->id)->get();
        $expertices = Expertice::where('user_id', '=', Auth::user()->id)->get();

        return view('users.profile.seeker.edit.expertise', [
            'user' => $user,
            'experiences' => $experiences,
            'expertices' => $expertices,
        ]);
    }

    public function store()
    {
            $expertice = new Expertice;

            $expertice->user_id = Auth::user()->id;
            $expertice->tool_name = request('tool_name');
            $expertice->level = request('level');

            $expertice->save();

            return redirect('/users/profile')->with('mssg', 'Informasi telah diperbarui');
    }

    public function destroy($id)
    {
        $expertice = Expertice::findOrFail($id);
        $expertice->delete();

        return redirect('/users/profile')->with('mssg', 'Pengalaman kerja telah dihapus');;
    }
}
