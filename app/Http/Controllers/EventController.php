<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();

        return view('pages.events')->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('event', 'public');
        Event::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('pages.events.read', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($event_id)
    {
        $event = Event::findOrFail($event_id);

        return view('pages.events.update', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $event_id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|file|max:1024',
            'description' => 'required|string|min:10|max:1000',
            'event_date' => 'required|date'
        ]);

        $event = Event::findOrFail($event_id);

        if ($request->hasFile('image')){
            if ($event->image){
                Storage::disk('public')->delete($event->image);
            }
            $validatedData['image'] = $request->file('image')->store('event', 'public');
        }

        $event->update([
            'title' => $request->title,
            'image' => $validatedData['image'] ?? $event->image,
            'description' => $request->description,
            'event_date' => $request->event_date
        ]);

        return redirect()->route('events')->with('updated', 'Event updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($event_id)
    {
        $event = Event::findOrFail($event_id);

        if ($event->image){
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('events')->with('deleted', 'Event deleted succesfully');
    }
}
