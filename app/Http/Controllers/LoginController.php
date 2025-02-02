<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {

   public function store(Request $request) {
    
    $request->validate([
        'email' => 'required|email|unique:jru_users,email',  // Validate email
        'password' => 'required|min:8',  // Validate password length
        ]);

        

        $jru_user = LoginUser::create([
          'email' => 'shanhiro.rosario@my.jru.edu',
          'password' => Hash::make('klmn12sa2'), 
         ]);

         
        $jru_user->save();

     dd($jru_user); // To check what data is being passed in the request
     return redirect()->route('LFMS');
     return response()->json(['message' => 'User created successfully!', 'user' => $jru_user]);



   }

}