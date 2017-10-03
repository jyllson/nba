<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => ['create', 'store']]);
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

	public function create()
	{
		return view('login');
	}

	public function store()
	{
		if (!auth()->attempt(
				request(['email', 'password'])
			)) {

			return back()->withErrors([
				'message' => 'Bad credentials! Please try again.'
			]);
		}

		return redirect('/');
	}

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }
}
