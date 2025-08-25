<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events', compact('events'));
    }

    public function create()
    {
        return view('admin.events-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'event_date'  => 'required|date',
            'location'    => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

                // Upload new image to Cloudinary
              $uploadCloudinary = cloudinary()->uploadApi()->upload(
                    $request->file('cover_image')->getRealPath(),
                    [
                        'folder' => 'ibaf/events',
                        'resource_type' => 'auto',
                        'transformation' => [
                            'quality' => 'auto',
                            'fetch_format' => 'auto'
                        ]
                    ]
                );
                $imageUrl = $uploadCloudinary['secure_url'];
                $imageId = $uploadCloudinary['public_id'];
             

        Event::create([
            'title'       => $request->title,
            'description' => $request->description,
            'event_date'  => $request->event_date,
            'location'    => $request->location,
            'cover_image' => $imageUrl,
            'status'      => 'draft',
            'created_by'  => auth()->id(),
        ]);

        return redirect()->to('admin/events')->with('success', 'Event created successfully!');
    }

    public function edit(Event $event)
    {
        return view('admin.events-edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'event_date'  => 'required|date',
            'location'    => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('cover_image')) {
            // Upload new image to Cloudinary
            $uploadCloudinary = cloudinary()->uploadApi()->upload(
                $request->file('cover_image')->getRealPath(),
                [
                    'folder' => 'ibaf/events',
                    'resource_type' => 'auto',
                    'transformation' => [
                        'quality' => 'auto',
                        'fetch_format' => 'auto'
                    ]
                ]
            );
            $imageUrl = $uploadCloudinary['secure_url'];
            $imageId  = $uploadCloudinary['public_id'];
        } else {
            // Keep old image if no new one uploaded
            $imageUrl = $event->cover_image;
        }

        $event->update([
            'title'       => $request->title,
            'description' => $request->description,
            'event_date'  => $request->event_date,
            'location'    => $request->location,
            'cover_image' => $imageUrl,
            'status'      => $request->status ?? $event->status,
        ]);

        return redirect()->to('admin/events')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success', 'Event deleted successfully!');
    }

 
}
