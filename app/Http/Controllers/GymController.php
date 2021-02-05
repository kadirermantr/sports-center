<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Models\Application;
use App\Models\Gym;
use App\Models\City;
use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class GymController extends Controller
{
    public function index(Request $request)
    {
        $city_id = $request->get('city_id');

        if ($city_id == null) {
            $gyms = Gym::paginate(12);
            $cities = City::get(["name","id"]);
            $selected = 'Tüm şehirler';

            return view('gyms', compact('gyms', 'cities', 'selected'));
        }

        else {
            $gyms = Gym::all()->where('city_id', $city_id)->all();
            $cities = City::get(["name","id"]);
            $selected = City::find($city_id)->name;

            return  view('gyms', compact('gyms','cities', 'selected'));
        }
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

        Gym::create([
            'name' => $name,
            'city_id' => $city_id,
            'district_id' => $district_id,
            'photo' => $photo_name,
            'capacity' => $capacity,
            'work_days' => $work_days,
            'work_hours' => $work_hours,
            'created_by' => $created_by,
        ]);

        return back();
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

    public function destroy(Gym $gym, $id)
    {
        Gym::findOrFail($id)->delete();
        return back();
    }

}
