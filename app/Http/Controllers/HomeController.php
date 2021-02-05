<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $gyms = Gym::all();
        return  view('index', compact('gyms'));
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function classes()
    {
        return view('classes');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function membership()
    {
        return view('membership-agreement');
    }

    public function privacy()
    {
        return view('privacy-policy');
    }
}
