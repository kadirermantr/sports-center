<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GymRegisterController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [

        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'city_id' => $data['city_id'],
            'district_id' => $data['district_id'],
            'photo' => $data['photo'],
            'capacity' => $data['capacity'],
            'work_days' => $data['work_days'],
            'work_hours' => $data['work_hours'],
        ]);
    }
}
