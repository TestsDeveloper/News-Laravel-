<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
        // dd($input);
        Validator::make($input, [
            'rename' => ['required', 'string', 'max:255'],
            'reemail' => ['required', 'string', 'email', 'max:255'],
            'rephone' => ['required'],
            'readdress' => ['required'],
            'repassword' => ['required'] ,
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['rename'],
            'email' => $input['reemail'],
            'phone' => $input['rephone'],
            'address' => $input['readdress'],
            'password' => Hash::make($input['repassword']),

        ]);
    }
}
