<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Models\Application;
use App\Models\City;
use App\Models\District;
use App\Models\Gym;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function index()
    {
        //
    }

    public function applications()
    {
        $id = Auth::user()->id;
        $applications = Application::all()->where('created_by', $id)->all();

        return view('auth.account.applications', compact('applications'));
    }

    public function show()
    {
        $cities = City::get(["name","id"]);
        return view('gym-application', compact('cities'));
    }

    public function save(Request $request) {
        $name = $request->get('name');
        $city_id = $request->get('city_id');
        $district_id = $request->get('district_id');
        $fileUrl = $request->file('photo');
        $capacity = $request->get('capacity');
        $work_days = $request->get('work_days');
        $work_hours = $request->get('work_hours');
        $created_by = auth()->user()->id;

        if (isset($fileUrl)) {
            $photo_name = uniqid('gym_'). '.' . $fileUrl->getClientOriginalExtension();
            $fileUrl->move(UploadPaths::getUploadPath('gym_photos'), $photo_name);
        }

        else {
            $photo_name = '';
        }

        Application::create([
            'name' => $name,
            'city_id' => $city_id,
            'district_id' => $district_id,
            'photo' => $photo_name,
            'capacity' => $capacity,
            'work_days' => $work_days,
            'work_hours' => $work_hours,
            'created_by' => $created_by,
        ]);

        Auth::user()->increment('applications', 1);

        return redirect()->route('applications')
            ->with('message', 'Başvuru yapıldı.');
    }

    public function file() {
        $data = UploadPaths::uploadDataFromFile();
    }

    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id",$request->city_id)
            ->get(["name","id"]);
        return response()->json($data);
    }

    public function destroy(Application $application, $id)
    {
        Application::findOrFail($id)->delete();
        return redirect()->route('admin.deleted-applications')
            ->with('message', 'Başvuru silindi.');
    }
}
