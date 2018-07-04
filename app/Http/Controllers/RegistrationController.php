<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('pages.register');
    }

    public function store(){

        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed'
        ]);

        $data = \request()->all();
        // Create the user
        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
        // Return redirect
        return redirect()->home();
    }
}
