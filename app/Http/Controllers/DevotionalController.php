<?php

namespace App\Http\Controllers;

use App\Models\Devotional;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DevotionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $devotionals = Devotional::all();
        return view('dashboard.devotional.index', ['devotionals' => $devotionals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.devotional.create');
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
            // opening prayer
            // topic
            // bible text
            // memory verse
            // devotion
            // closing prayer
        $request->validate([
            'opening_prayer' => 'required',
            'topic' => 'required',
            'bible_text' => 'required',
            'memory_verse' => 'required',
            'devotion' => 'required',
            'closing_prayer' => 'required'
        ]);

        DB::beginTransaction();

        $event = Devotional::create([
            'opening_prayer' => $request->input('opening_prayer'),
            'topic' => $request->input('topic'),
            'bible_text' => $request->input('bible_text'),
            'memory_verse' => $request->input('memory_verse'),
            'devotion' => $request->input('devotion'),
            'closing_prayer' => $request->input('closing_prayer')
        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.devotion.index'))->with('message', 'Payment Submitted Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function show(Devotional $devotional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function edit(Devotional $devotional, $id)
    {
        //
        $user = auth()->user();
        $devotion = Devotional::findOrFail($id);
        return view('dashboard.devotional.edit', compact('devotion', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        {
            $devotion = Devotional::findOrFail($id);
            $valid = $request->validate([
                'opening_prayer' => 'required',
                'topic' => 'required',
                'bible_text' => 'required',
                'memory_verse' => 'required',
                'devotion' => 'required',
                'closing_prayer' => 'required'
            ]);

            $devotion->update(array_merge($valid));
    
    
            // dd($valid);
            return redirect()->intended(route('dashboard.devotion.index'))->withInput($request->input())->with('message','Category Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devotional  $devotional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devotional $devotional, $id)
    {
        //
        $devotion = Devotional::findOrFail($id);
        $devotion->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
