<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       // dd(auth()-> user()); will check if we are signed in
        return view('dashboard');
    }
}
