<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:users,username',
            'phone_number' => 'required|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'martial_status' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'username' => $input['username'],
            'phone_number' => $input['phone_number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'martial_status' => $input['martial_status'],
            'nationality' => $input['nationality'],
            'gender' => $input['gender'],
            'dob' => $input['dob'],
            
        ]);
    }
}
