<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    function customLogin(Request $request)
    {
        $request->validate([
            'user_email'     =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('user_email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess("Signed in");
        }

        return redirect('login')->withSuccess("Login details are not valid");
    }

    function customRegistration(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email|unique:users,user_email',
            'password'  =>  'required|min:6'
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect('dashboard')->withSuccess("You have signed-in");
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->withSuccess('You are not allowed to access');
    }


    public function create(array $data)
    {
        return User::create([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'user_password' => Hash::make($data['password'])
        ]);
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }


}
