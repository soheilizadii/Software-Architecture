<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class DevelopersController extends Controller
{
    public function register(){
        return view('registerDeveloper');
    }
    public function doregister(){
        $this->validate(request(),[
            'name' => 'Required',
            'email' => 'Required|email',
            'password' => 'Required|min:4'
        ]);
        
        
        $user=User::create(request()->all());
        
        if($user instanceof User )
        {
            return redirect()->route('login');
        }
        else{
            return redirect()->back()->with('registerError',true);
        }

         
        request()->all();
    }
    public function login(){
        return view('loginDeveloper');
    }
    public function dologin(){

        $this->validate(request(),[
            'email' => 'Required|email',
            'password' => 'Required|min:4'
        ]);

        if(Auth::attempt(['email'=>request()->input('email'),'password'=>request()->input('password') ]))
        {
            return redirect()->route('developerDashboard');
        }
        else{
            return redirect()->back()->with('loginError',true);
        }
    }

    public function dashboard(){
               
         return view('developers.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function profile(){
        return view('developers.profile');
    }
    public function profileUpdate(){
        
        
        $user=User::find(Auth::user()->id);
        $user->update(request()->all());
        if($user instanceof User)
        {
            return redirect()->route('profileDeveloper')->with('Changes Successfully',true);
        }
    }

    public function topic(){
        return view('developers.topic');
    }
}
