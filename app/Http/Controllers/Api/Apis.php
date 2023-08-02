<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use App\Models\User;
use App\Models\Event;
use App\Models\Payment;
use App\Models\Devotional;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Apis extends Controller
{
    //
    public function createUser(Request $request)
    {

        // $validateRequest = Validator::make(
        // $request->all(),
        //     [

        //     ]);
        try {
            $validateUser = Validator::make($request->all(),[
                'name' => 'required',
                'surname' => 'required',
                'username' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'nationality' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'image' => 'mimes:jpg,png,jpeg'
            ]);

            if($validateUser->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validateUser->errors()
        ], 401);
        }


            $user = User::create([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->password),
                'nationality' => $request->input('nationality'),
                'gender' => $request->input('gender'),
                'dob' => $request->input('dob'),
                'image' => $request->input('image')
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Account Created Successfully',
                'data' => $user,
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function loginUser(Request $request)
    {

        try {
            //code...
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

                if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation Error',
                    'errors' => $validateUser->errors()
                ], 401);
                }

                if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email and Password does not match with our record.'
                ], 401);
                }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function editProfile(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        $valid = Validator::make($request->all(),[
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

        if ($valid->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $valid->errors()
            ], 401);
        }
        $user->update($input);
        return response()->json([
            'status' => true,
            'message' => 'Post Updated Successfully',
        ], 200);
    }

    public function transactionHistory()
    {
        try {
            $user = auth()->user();
            $payment_history = Payment::all()->where('user_id', $user->id);

            return response()->json([
                'status' => true,
                'message' => 'All the users payment history',
                'All Courses' => $payment_history
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }
    public function makePayment(Request $request)
    {
        try {
            $user = auth()->user();
            $validateUser = Validator::make($request->all(),[
                'name' => 'required',
                'amount' => 'required',
                'payment_type' => 'required',
                'status' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation Error',
                    'errors' => $validateUser->errors()
            ], 401);
            }


            $user = Payment::create([
                'user_id' => $user->id,
                'name' => $request->input('name'),
                'amount' => $request->input('amount'),
                'payment' => $request->input('payment_type'),
                'status' => $request->input('status')
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Account Created Successfully',
                'data' => $user
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function events()
    {
        try {
            $user = auth()->user();
            $events = Event::all();

            return response()->json([
                'status' => true,
                'message' => 'All the Upcoming Events',
                'All Courses' => $events
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function news()
    {
        try {
            $user = auth()->user();
            $news = News::all();

            return response()->json([
                'status' => true,
                'message' => 'All the Upcoming News',
                'All Courses' => $news
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionals()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all();

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Courses' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }
}