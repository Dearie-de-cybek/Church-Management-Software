<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
            'phone_number' => 'required|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'martial_status' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);

        DB::beginTransaction();

        $user = User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password),
            'martial_status' => $request->input('martial_status'),
            'nationality' => $request->input('nationality'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),

        ]);
        DB::commit();
        return redirect()->intended('dashboard')->with('message', 'Account Registered Success');
        DB::rollBack();

    }

    public function editProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $valid = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => ['required', Rule::unique('users')->ignore($user)],
            'phone_number' => ['required', Rule::unique('users')->ignore($user)],
            'email' => ['required', Rule::unique('users')->ignore($user)],
            'password' => 'required|confirmed|min:8',
            'martial_status' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $user->update(array_merge($valid, ['image' => $request->file('image')->store('user_images', 'public')]));
        }
        else {
            $user->update(array_merge($valid));
        }
        return redirect()->intended('dashboard')->with('dashboard')->withInput($request->input())->with('message', 'Profile Updated');
    }

    public function loginPage() {
        return view('login');
    }

    public function login(Request $request)
    {

        //code...
        $validateUser = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );



        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->intended('dashboard')->with('message', 'Login Success');
        }

        return redirect()->back()->with('message','Invalid username or password');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
    }
}
