<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(){
        return view('pages.login');
    }

    public function store(){
        if(!auth()->attempt(request(['username', 'password']))){
            return back()->withErrors([
                'message' => 'Please check the credentials'
            ]);
        }

        return redirect()->home();
    }

    public function destroy(){
        auth()->logout();
        return redirect('/dashboard');
    }
}
