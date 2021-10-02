<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;

class AuthController extends Controller
{
     public function index()
    {
        return view('pages.auth.login');
    }  
      

    public function createSignin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           var_dump(Auth::check());
           die(); 
            return redirect()->intended('dashboard')
                        ->withSuccess('Logged-in');
        }
        return redirect("login")->withSuccess('Credentials are wrong.');
    }


    public function signup()
    {
        return view('pages.auth.register');
    }
      

    public function customSignup(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("/")->withSuccess('Successfully logged-in!');
    }


    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboardView()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}