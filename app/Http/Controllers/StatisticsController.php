<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function member()
    {
        $member = User::count();
        return view('auth.admin.general', compact('member'));
    }

}
