<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name'=>'required|min:2|max:25',
            'username'=>'required|unique:users|min:5|max:20',
            'email'=>'required|email|unique:users|max:30',
            'password'=>[
                'required',
                'confirmed',
                Password::min(8)
                    // ->letters()
                    // ->mixedCase()
                    // ->numbers()
                    // ->symbols()
                ]
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('posts.index');
    }
}
