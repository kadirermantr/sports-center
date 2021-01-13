<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gym;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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

    public function blog()
    {
        $blogs = Blog::all();
        return  view('blog', compact('blogs'));
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }
}
