<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class LoginUserRequest extends FormRequest {

  public function authorize(): bool
  {
      return true;
  }

  public function login(Request $request) 
    {

    $email = $request->input('email'); // Get input value
    $password = $request->input('password');


  }

  public function rules(): array
  {
      return [
        
          'email' => 'required|email',
          'password' => 'required|min:8'
      
      ];
  }

  public function messages()
  {
      return [
          'email.required' => 'We need your email address.',
          'password.required' => "Enter your password"
      ];
  }

  
}