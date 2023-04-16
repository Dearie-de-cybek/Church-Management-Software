<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = EventCategory::all();
        return view('dashboard.news_and_event.event_categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.news_and_event.event_categories.create');
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
        $valid= $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:event_categories',
        ]);

        $slug = Str::slug($valid['slug'], '-');

        DB::beginTransaction();

        EventCategory::create(array_merge($valid,['slug' => $slug]));

        DB::commit();
        return redirect()->intended('dashboard.event-category')->with('message', 'Event Category Created Submitted Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategory $eventCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EventCategory $eventCategory, $id)
    {
        //
        $user = auth()->user();
        $eventCategory = EventCategory::findOrFail($id);
        return view('dashboard.news_and_event.event_categories.edit', ['eventCategory' => $eventCategory], ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        {
        $eventCategory = EventCategory::findOrFail($id);
        $valid = $request->validate([
            'name' => ['required', 'max:255', 'min:5'],
            'slug' => ['required', Rule::unique('event_categories')->ignore($eventCategory)]

        ]);
        $slug = Str::slug($valid['slug'], '-');
         $eventCategory->update(array_merge($valid,['slug'=>$slug]));


        // dd($valid);
        return redirect()->intended('dashboard.event-category')->withInput($request->input())->with('message','Category Updated');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventCategory $eventCategory, $id)
    {
        //
        $news = EventCategory::findOrFail($id);
        $news->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
