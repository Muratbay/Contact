<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index(){
        return view('auth');
    }

    public function login(){
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return view('index');
    }

    public function auth(Request $request){

        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->input('email'))->first();

        $pass = Hash::check($request->input('password'), $user->password);
        if(!$pass){
            throw ValidationException::withMessages([
                'password' => ['parol qate!']
            ]);
        }
        
        Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
        
        return view('index');
        

    }

    public function logout()
    {
        return redirect('/')->with(Auth::logout());
    }
}
