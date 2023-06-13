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
        $events = Event::all();
        return view('dashboard.news_and_event.event.index', ['events' => $events]);
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'event_categories' => 'required|exists:event_categories,id',
            'date' => 'required'
        ]);

        DB::beginTransaction();

        $event = Event::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'event_categories' => $request->input('event_categories'),
            'date' => $request->input('date')
        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.event.index'))->with('message', 'Payment Submitted Successfully');
        DB::rollBack();
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
                'date' => 'required'
    
            ]);

            $event->update(array_merge($valid));
    
    
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
