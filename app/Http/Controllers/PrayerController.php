<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PrayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prayers = Prayer::all();
        return view('dashboard.prayer.index', ['prayers' => $prayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.prayer.create');
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
            'prayer' => 'required'
        ]);

        DB::beginTransaction();

        $prayer = Prayer::create([
            'prayer' => $request->input('prayer')
        ]);

        DB::commit();
        return redirect()->intended(route('dashboard.prayer.index'))->with('message', 'Prayer Created Successfully');
        DB::rollBack();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function show(Prayer $prayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function edit(Prayer $prayer, $id)
    {
        //
        $user = auth()->user();
        $prayer = Prayer::findOrFail($id);
        return view('dashboard.prayer.edit', compact('prayer', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prayer $prayer, $id)
    {
        //
        {
            $devotion = Prayer::findOrFail($id);
            $valid = $request->validate([
                'prayer' => 'required'
            ]);

            $devotion->update(array_merge($valid));
    
    
            // dd($valid);
            return redirect()->intended(route('dashboard.prayer.index'))->withInput($request->input())->with('message','Category Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prayer  $prayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prayer $prayer, $id)
    {
        //
        $prayer = Prayer::findOrFail($id);
        $prayer->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }
}
