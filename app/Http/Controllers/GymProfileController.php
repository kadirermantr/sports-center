<?php

namespace App\Http\Controllers;

use App\Models\Gym;

class GymProfileController extends Controller
{
    public function index($id)
    {
        $gyms = Gym::all();

        foreach ($gyms as $gym)
        {
            if ($gym->id == $id) {
                return view('gym-details', compact('gym'));
            }
        }

        abort(404);
    }
}
