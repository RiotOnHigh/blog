<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;

use App\User;

use App\Mail\WelcomeAgain;

use App\Http\Requests\RegistrationRequest;


class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }
    
    public function persits() {
        
         $user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        
        auth()->login($user);
        
        \Mail::to($user)->send(new WelcomeAgain($user));
        
    }
}
