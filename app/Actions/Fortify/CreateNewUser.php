<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Log;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:14'],
            'password' => $this->passwordRules(),
        ])->validate();

        
        // if($validator->fails()) {
        //     return Redirect::back()->withErrors($validator);
        // }

        Log::error("after valodate...");

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

        Log::error("after save...");

        if(request()->hasFile('image')) {
            $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();
            request()->file('image')->storeAs('profile-photos',$imageName);
            $user->update(['profile_photo_path' => 'profile-photos/'.$imageName]);
        }
        Log::error("after upload...");
        return $user;
    }
}
