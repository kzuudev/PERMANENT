<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\LoginUser;

class LoginUserRequest extends FormRequest {


  public function login(Request $request) 
    {

    $email = $request->input('email'); // Get input value
    $password = $request->input('password');
  }



  
}