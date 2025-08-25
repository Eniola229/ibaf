<?php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'organization' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $event->registrations()->create($request->all());

        return back()->with('success', 'You have successfully registered for this event!');
    }

    public function registrations($id)
    {
        $event = \App\Models\Event::with('registrations')->findOrFail($id);
        $registrations = $event->registrations()->latest()->get();

        return view('admin.registrations', compact('event', 'registrations'));
    }

}
