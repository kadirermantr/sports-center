<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class CityDistrictController extends Controller
{
    public function index()
    {
        $data['cities'] = City::get(["name","id"]);
        return view('gym-register',$data);
    }

    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id",$request->city_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
}
