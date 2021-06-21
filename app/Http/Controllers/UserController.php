<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Experience;
use App\Models\Expertice;

class UserController extends Controller
{
    
    public function index()
    {
        // get data from db
        $users = User::latest()->get();
    
        return view('users.manage.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $experience = 'something';
        $expertice = 'something';

        return view('users.manage.show', ['user' => $job,]);
    }

    public function profile()
    {
        if (Auth::user()->role == 'seeker')
        {
            $user = User::findOrFail(Auth::user()->id);
            $experiences = Experience::where('user_id', '=', Auth::user()->id)->get();
            $expertices = Expertice::where('user_id', '=', Auth::user()->id)->get();

            return view('users.profile.seeker.index', [
                'user' => $user,
                'experiences' => $experiences,
                'expertices' => $expertices,
            ]);
        }
        elseif (Auth::user()->role == 'company')
        {
            $user = User::findOrFail(Auth::user()->id);

            return view('users.profile.company.index', [
                'user' => $user,
            ]);
        }
    }

    public function edit()
    {
        $user = User::findOrFail(Auth::user()->id);

        if (Auth::user()->role == 'seeker')
        {
            return view('users.profile.seeker.edit.biography', [
                'user' => $user,
            ]);
        }
        elseif (Auth::user()->role == 'company')
        {
            return view('users.profile.company.edit', [
                'user' => $user,
            ]);
        }
        
    }

    public function update()
    {
        if (Auth::user()->role == 'seeker') 
        {
            $user = User::findOrFail(Auth::user()->id);

            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->email = request('email');
            $user->phone = request('phone');
            $user->education = request('education');
            $user->institution = request('institution');
            $user->major = request('major');
            $user->min_expectation_salary = request('min_expectation_salary');
            $user->max_expectation_salary = request('max_expectation_salary');
            
            $user->update();

            return redirect('/users/profile')->with('mssg', 'Informasi telah diperbarui');
        }
        elseif (Auth::user()->role == 'company')
        {
            $user = User::findOrFail(Auth::user()->id);

            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->email = request('email');
            $user->phone = request('phone');
            $user->company = request('company');
            $user->industry = request('industry');
            $user->about_company = request('about_company');
            
            $user->update();
    
            return redirect('/users/profile')->with('mssg', 'Informasi telah diperbarui');
        }
    }

    public function suspend($id) 
    {
        $user = User::findOrFail($id);

        if ($user->status == 'active') {
            $user->status = 'suspended';
            $user->update();
            return redirect("/home-admin")->with('mssg', 'Pengguna telah di suspend');
        }
        elseif ($user->status == 'suspended') {
            $user->status = 'active';
            $user->update();
            return redirect("/home-admin")->with('mssg', 'Pengguna telah di aktifkan');
        } 
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/home-admin');
    }
}
