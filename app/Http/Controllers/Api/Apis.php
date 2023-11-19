<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use App\Models\User;
use App\Models\Event;
use App\Models\Prayer;
use App\Models\Payment;
use App\Models\Devotional;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EventCategory;
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
        try {
            $validateUser = Validator::make($request->all(),[
                'name' => 'required',
                'surname' => 'required',
                'phone_number' => 'required|unique:users,phone_number',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'nationality' => 'required',
                'martial_status' => 'required',
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
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->password),
                'nationality' => $request->input('nationality'),
                'martial_status' => $request->input('martial_status'),
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

    public function allusers(Request $request)
    {
        try {
            
            $allusers = User::all();

            return response()->json([
                'status' => true,
                'message' => 'Account Created Successfully',
                'data' => $allusers
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
                'user' => $user,
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
        $img_dir = $request->file('image')->store('images', 'public');
        $valid = Validator::make($request->all(),[
            'name' => 'nullable',
            'surname' => 'nullable',
            'username' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone_number' => ['nullable', Rule::unique('users')->ignore($user)],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'password' => 'nullable|confirmed|min:8',
            'martial_status' => 'nullable',
            'nationality' => 'nullable',
            'gender' => 'nullable',
            'dob' => 'nullable',
            'bio' => 'nullable',
            'image' => ['nullable|mimes:jpg,png,jpeg,mp4', $img_dir],
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

    public function userProfile(Request $request, $id)
    {
        try {
            $input = $request->all();
            $user = auth()->user();
            $profile = User::findOrFail($id);

            return response()->json([
                'status' => true,
                'message' => 'All the Upcoming Profile',
                'User profile' => $profile
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function transactionHistory()
    {
        try {
            $user = auth()->user();
            $payment_history = Payment::all()->where('user_id', $user->id);

            return response()->json([
                'status' => true,
                'message' => 'All the users payment history',
                'All Payment History' => $payment_history
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

    public function birthdayEvent()
    {
        try {
            $user = auth()->user();
            $events = Event::all();
            $eventCategory = EventCategory::all()->where('name', 'Birthday');
            // $birthday = Event::all()->where('email', 'Birthday');
            foreach ($eventCategory as $category) {
                $id = $category->id;
                $name = $category->name;
            }
            $birthday = Event::all()->where('event_categories', $id);
            // ($event_categories as $category)
            // {{ $category->id }} {{ $category->name }}
        

            return response()->json([
                'status' => true,
                'message' => 'All the Upcoming Events',
                'All Events' => $birthday
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
                'All Events' => $events
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
                'All News' => $news
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
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsSunday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Sunday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsMonday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Monday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsTuesday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Tuesday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsWednesday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Wednesday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsThursday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Thursday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsFriday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Friday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function devotionalsSaturday()
    {
        try {
            $user = auth()->user();
            $devotional = Devotional::all()->where('day', 'Saturday');

            return response()->json([
                'status' => true,
                'message' => 'All Devotional',
                'All Devotionals' => $devotional
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayers()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all();

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersSunday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Sunday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersMonday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Monday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersTuesday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Tuesday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersWednesday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Wednesday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersThursday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Thursday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersFriday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Friday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Server Error',
                'errors' => $th->getMessage()
            ]);
        }
    }

    public function prayersSaturday()
    {
        try {
            $user = auth()->user();
            $prayers = Prayer::all()->where('day', 'Saturday');

            return response()->json([
                'status' => true,
                'message' => 'All prayers',
                'All Prayers' => $prayers
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