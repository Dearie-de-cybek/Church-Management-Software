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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'author' => 'required',
            'duration' => 'required',
            'date' => 'required'
        ]);

        DB::beginTransaction();

        $somen = Sermon::create([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'duration' => $request->input('duration'),
            'date' => $request->input('date')
        ]);

        DB::commit();
        return redirect()->back()->with('message', 'Payment Submitted Successfully');
        DB::rollBack();
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
