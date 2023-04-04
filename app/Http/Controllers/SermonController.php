<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sermons = Sermon::all();
        return view('dashboard.sermon_and_prayer.sermon.index', ['sermons' => $sermons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.sermon_and_prayer.sermon.create');
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
            'author' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'audio' => 'mimes:jpg,png,jpeg,mp4,mp3'
        ]);

        $audio = $request->file('audio')->store('images', 'public');

        Sermon::create(array_merge($valid, ['audio' => $audio]));

        return redirect()->back()->with('message', 'Sermon Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\semon  $semon
     * @return \Illuminate\Http\Response
     */
    public function show(sermon $sermon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\semon  $semon
     * @return \Illuminate\Http\Response
     */
    public function edit(sermon $sermon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\semon  $semon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sermon $sermon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\semon  $semon
     * @return \Illuminate\Http\Response
     */
    public function destroy(sermon $sermon)
    {
        //
    }
}
