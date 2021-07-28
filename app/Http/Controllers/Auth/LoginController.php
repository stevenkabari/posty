<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index (){
//responsible for storing the form


return view('auth.login');
    }
    public function store(Request $request){
//responsible for signing the user in
//dd('son of a bitch you in'); just to check if everything is working
$this->validate(//calidating the stuff entered in the login page
    $request,
    [
        'email' => 'required|email',
        'password' => 'required'  
    ]);

if(!auth()->attempt($request->only('email', 'password'))){//if invalid credentials are given user just gets redirected to the same page
    return back()->with('status','Invalid login details');
}


return redirect()->route('dashboard');
    }
}
