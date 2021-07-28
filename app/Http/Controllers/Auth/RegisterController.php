<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request) //request object contains info about a request
    {
        // dd or die dump will kill the page and output anything you put in here
        //dd('abc');

        //validate (refer to docs)
  
        $this->validate(
            $request,
            [
                'name' => 'required|max:255',
                'username' => 'required|max:255',
                'email' => 'required|max:255',
                'password' => 'required|confirmed' //confirmed looks through our form to see if it matches any confirmed thingy so no need for complex if statements 
            ]
        ); // validates said request  and if that fails it will throw an exception which will redireect the user back
        //store
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            //for password we need to store it as a hash
            'password' => Hash::make($request->password), // facads are a face for underlying functionality
        ]); //the eloquent method creates user in the Db remember to add it to apps> models> user.php
        //sign user in
        //auth()-> user(); auth helper is useful when you want to return the authenticated user. for example if you want the users name.
        auth()->attempt($request->only('email', 'password')); //we want to sign the user in and pass through the users email and password.
        //redirect
        return redirect()->route('dashboard');



    }
}
