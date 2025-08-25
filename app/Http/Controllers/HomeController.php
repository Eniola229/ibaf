<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->take(3)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('events', 'blogs'));
    }
}
