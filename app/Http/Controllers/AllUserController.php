<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AllUserController extends Controller
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
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:all_users,username',
            'phone_number' => 'required|unique:all_users,phone_number',
            'email' => 'required|email|unique:all_users,email',
            'password' => 'required|confirmed|min:8',
            'martial_status' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);

        DB::beginTransaction();

        $user = AllUser::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'username' => $request->input('username'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'martial_status' => $request->input('martial_status'),
            'nationality' => $request->input('nationality'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),

        ]);
        DB::commit();
        return redirect()->intended('home')->with('message', 'Account Registered Success');
        DB::rollBack();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function show(AllUser $allUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AllUser $allUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllUser $allUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllUser  $allUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllUser $allUser)
    {
        //
    }
}
