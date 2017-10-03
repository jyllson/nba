<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => ['create', 'store']]);
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

	public function create()
	{
		return view('register');
	}

	public function store()
	{
		$this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        auth()->login($user);

        session()->flash('message', 'Thanks for registration!');

        return redirect('/');
	}
}
