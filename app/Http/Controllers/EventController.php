<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $event_categories = EventCategory::all();
        $events = Event::all();
        return view('dashboard.news_and_event.event.index', ['events' => $events], ['event_categories' => $event_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $event_categories = EventCategory::all();
        return view('dashboard.news_and_event.event.create', ['event_categories' => $event_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $valid = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'event_categories' => 'required|exists:event_categories,id',
            'image' => 'mimes:jpg,png,jpeg,mp4',
            'date' => 'required'
        ]);
        $img_dir = $request->file('image')->store('images', 'public');

        
        Event::create(array_merge($valid,['image' => $img_dir]));

        return redirect()->intended(route('dashboard.event.index'))->with('message', 'Event Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event, $id)
    {
        //
        $user = auth()->user();
        $event_categories = EventCategory::all();
        $event = Event::findOrFail($id);
        return view('dashboard.news_and_event.event.edit', compact('event', 'user', 'event_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        {
            $event = Event::findOrFail($id);
            $valid = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'event_categories' => 'required|exists:event_categories,id',
                'image' => 'mimes:jpg,png,jpeg,mp4',
                'date' => 'required'
    
            ]);

            if ($request->hasFile('image')) {
                $event->update(array_merge($valid, ['image' => $request->file('image')->store('user_images', 'public')]));
            }
            else {
                $event->update(array_merge($valid));
            }
    
    
            // dd($valid);
            return redirect()->intended(route('dashboard.event.index'))->withInput($request->input())->with('message','Category Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event, $id)
    {
        //
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
