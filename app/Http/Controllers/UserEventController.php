<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    // Show all events with pagination
    public function index()
    {
        $events = Event::orderBy('event_date', 'asc')->paginate(6); // 6 per page
        return view('events', compact('events'));
    }

    // Show single event details
    public function show($id)
    {
        $event = Event::findOrFail($id);

        // Get upcoming events (excluding the current one)
        $upcomingEvents = Event::where('id', '!=', $id)
            ->where('event_date', '>', now())
            ->orderBy('event_date', 'asc')
            ->take(5)
            ->get();

        return view('events-show', compact('event', 'upcomingEvents'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'asc')->paginate(6); // 6 per page
        return view('blog', compact('blogs'));
    }

    public function showblog($id)
    {
        $blog = Blog::findOrFail($id); 
        $recentBlogs = Blog::latest()->take(5)->get(); // Sidebar recent blogs
        return view('blog-single', compact('blog', 'recentBlogs'));
    }

}
