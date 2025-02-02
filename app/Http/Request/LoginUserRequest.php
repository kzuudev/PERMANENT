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
          'fullname' => 'required|string|max:255',
          'phone_number' => 'required|string|min:8|max:11',
          'email' => 'required|email',
          'donation_amount' => 'required|numeric|min:1',
          'date' => 'required|date',
          'message' => 'nullable|string',
      ];
  }

  public function messages()
  {
      return [
          'fullname.required' => 'Please enter your full name.',
          'phone_number.required' => 'Please provide a phone number.',
          'email.required' => 'We need your email address.',
          'donation_amount.required' => 'Please provide a donation amount.',
          'date.required' => 'Please specify the donation date.',
          'message.max' => 'The message can only be up to 255 characters.',
      ];
  }

  
}