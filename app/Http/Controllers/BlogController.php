<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        $post_count = $blogs->count();

        return  view('blog', compact('blogs', 'post_count' ));
    }

}
