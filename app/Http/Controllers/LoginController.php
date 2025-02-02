<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\LoginUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {

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
         'email' => 'required|email|exists:jru_users,email',  // Validate email
         'password' => 'required|min:8',  // Validate password length
         ]);
 
         $errorMsg = "";
         $email = $request->input('email'); 
         $password = $request->input('password'); 

          // Check if email exists in the database
         $user = DB::table('jru_users')->where('email', $email)->first();

        if($user) { //if the user exists in database (sqlite) execute code below
         if(password_verify($password, $user->password)) {
            return  redirect()->route('lfms');
         }else {
            $errorMsg = "Invalid password";
            return back()->with('errorMsg', $errorMsg); // Return with password error
         }
        }
    
   }

}