<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Gym;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $member = User::count();
        $application = Application::count();
        $gym = Gym::count();

        return view('auth.admin.general', compact('member', 'application', 'gym'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'nickname' => 'required|unique:users,nickname,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users')
            ->with('message', 'Kullanıcı bilgileri güncellendi.');
    }

    public function destroy(User $user, $id)
    {
        User::findOrFail($id)->delete();

        Gym::first()->delete();
        Gym::withTrashed()->first()->restore();

        return redirect()->route('deleted.users')
            ->with('message', 'Kullanıcı silindi.');
    }

    public function users()
    {
        $users = User::paginate(10);
        $user_count = 0;

        foreach ($users as $user) {
            $user_count++;
        }

        return view('auth.admin.users', compact('users', 'user_count'));
    }

    public function deletedUsers()
    {
        $users = User::onlyTrashed()->paginate(10);
        return view('auth.admin.deleted-users', compact('users'));
    }

    public function applications()
    {
        $applications = Application::where('status', 0)->paginate(10);
        return view('auth.admin.applications', compact('applications'));
    }

    public function approvedApplications()
    {
        $applications = Application::where('status', 1)->paginate(10);
        return view('auth.admin.approved-applications', compact('applications'));
    }

    public function rejectedApplications()
    {
        $applications = Application::where('status', -1)->paginate(10);
        return view('auth.admin.rejected-applications', compact('applications'));
    }

    public function deletedApplications()
    {
        $applications = Application::onlyTrashed()->paginate(10);
        return view('auth.admin.deleted-applications', compact('applications'));
    }

    public function deletedGyms()
    {
        $gyms = Gym::onlyTrashed()->paginate(10);
        return view('auth.admin.deleted-gyms', compact('gyms'));
    }

    public function accept(Application $application, $id)
    {
        $application = Application::findOrFail($id);

        $application->update([
            'status' => 1,
        ]);

        $name = $application->name;
        $city_id = $application->city_id;
        $district_id = $application->district_id;
        $photo= $application-> photo;
        $capacity = $application->capacity;
        $work_days = $application->work_days;
        $work_hours = $application->work_hours;
        $created_by = $application->created_by;


        Gym::create([
            'name' => $name,
            'city_id' => $city_id,
            'district_id' => $district_id,
            'photo' => $photo,
            'capacity' => $capacity,
            'work_days' => $work_days,
            'work_hours' => $work_hours,
            'status' => 1,
            'created_by' => $created_by,
        ]);

        return redirect()->route('admin.approved-applications')
            ->with('message', 'Başvuru onaylandı.');
    }

    public function reject(Application $application, $id)
    {
        $application = Application::findOrFail($id);

        $application->update([
            'status' => -1,
        ]);

        return back();
    }

    public function gyms()
    {
        $gyms = Gym::paginate(10);
        return view('auth.admin.gyms', compact('gyms'));
    }
}
