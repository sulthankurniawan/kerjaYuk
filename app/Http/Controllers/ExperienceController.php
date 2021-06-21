<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Experience;
use App\Models\Expertice;

class ExperienceController extends Controller
{
    
    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);
        $experiences = Experience::where('user_id', '=', Auth::user()->id)->get();
        $expertices = Expertice::where('user_id', '=', Auth::user()->id)->get();

        return view('users.profile.seeker.edit.experience', [
            'user' => $user,
            'experiences' => $experiences,
            'expertices' => $expertices,
        ]);
    }

    public function store()
    {
            $experience = new Experience;

            $experience->user_id = Auth::user()->id;
            $experience->company_name = request('company_name');
            $experience->job_name = request('job_name');
            $experience->start_period = request('start_period');
            $experience->end_period = request('end_period');

            $experience->save();

            return redirect('/users/profile')->with('mssg', 'Informasi telah diperbarui');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect('/users/profile')->with('mssg', 'Pengalaman kerja telah dihapus');;
    }
}
