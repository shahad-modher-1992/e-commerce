<?php

namespace App\Actions\Fortify;

use App\Events\NewRegisterEvent;
use App\Models\User;
use App\Notifications\NewRegister;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone' => [
                'required',
                'string',
                'max:255',
               ],
               'address'=> [
                   'required',
                   'string',
               ],
               'role_id'=>['required','regex:/^[1-2]$/'],
               'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role_id'=>$input['role_id'],
            'phone'=>$input['phone'],
            'address'=>$input['address'],
            'password' => Hash::make($input['password']),
        ]);   
    }
}
