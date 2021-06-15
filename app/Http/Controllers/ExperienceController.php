<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    

    

    public function editExperience()
    {
        $user = User::findOrFail(Auth::user()->id);
        $experience = 'something';
        $expertice = 'something';
        return view('users.profile.seeker.edit.experience', [
            'user' => $user,
            'experience' => $experience,
            'expertice' => $expertice,
        ]);
    }

    public function editExpertice()
    {
        $user = User::findOrFail(Auth::user()->id);
        $experience = 'something';
        $expertice = 'something';
        return view('users.profile.seeker.edit.expertice', [
            'user' => $user,
            'experience' => $experience,
            'expertice' => $expertice,
        ]);
    }

    

    public function updateExpirience()
    {
            $user = User::findOrFail(Auth::user()->id);

            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->email = request('email');
            $user->education = request('education');
            $user->institution = request('institution');
            $user->major = request('major');
            $user->min_expectation_salary = request('min_expectation_salary');
            $user->max_expectation_salary = request('max_expectation_salary');
            $user->password = Hash::make(request('password'));
            $user->phone = request('phone');

            $user->update();

            return redirect('/users/profile')->with('mssg', 'Informasi telah diperbarui');
    }

    public function updateExpertise()
    {
        //
    }
}
