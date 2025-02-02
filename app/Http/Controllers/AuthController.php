<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller {

   public function store(Request $request) {
      
        
   //  $request->validate([
   //    'email' => 'required|email|unique:jru_users,email',  // Validate email
   //    'password' => 'required|min:8',  // Validate password length
   //    ]);

   //      $jru_user = LoginUser::create([
   //        'email' => 'robelyn.andoy@my.jru.edu',
   //        'password' => Hash::make('jowqualsw'), 
   //       ]);

         
   //      $jru_user->save();

   //   dd($jru_user); // To check what data is being passed in the request
   //   return response()->json(['message' => 'User created successfully!', 'user' => $jru_user]);


   }
   
   public function login(Request $request) {
   
      $request->validate([
         'email' => 'required|email',  // Validate email
         'password' => 'required|min:8',  // Validate password length
         ]);
 
         $errorMsg = "";

         $email = $request->input('email'); 
         $password = $request->input('password'); 
     
          // Check if email exists in the database
         $user = DB::table('jru_users')->where('email', $email)->first();
    
         

      if ($user) {
         if (password_verify($password, $user->password)) {
            Auth::loginUsingId($user->id);
            session()->regenerate();
            return redirect(route('lfms'));  // Redirect to home page after successful login
        } else {
            // If password doesn't match
            return back()->withErrors(['password' => 'Invalid Password.']);
        }
     } else {
         // You can handle invalid email/password here if needed
         return back()->withErrors([
             'email' => 'Invalid Email.',
         ]);
     }

    
   }

}