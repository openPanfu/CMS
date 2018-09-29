<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function settings()
    {
        return view('settings');
    }

    public function newSettings(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current Password is does not match our records.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Your new Password can not be the same as your current one.");
        }
        
        if($request->get('email') == $request->get('new-email')){
            //Current email and new email are same
            return redirect()->back()->with("error","Your new Email can not be the same as your current one.");
        }

        if($request->get('sex') == $request->get('new-sex')){
            //Current Gender and new Gender are same
            return redirect()->back()->with("error","You cant choose the same gender.");
        }
        
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'string|min:8|confirmed',
            'email' => 'string|email|max:255|unique:users',
            'sex' => 'intger|between:0,1'
        ]);
 
        //Change User details
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->email = $request->get('new-email');
        $user->sex = (int)$request->get('new-sex');
        $user->save();
 
        return redirect()->back()->with("success","User details changed successfully !");
 
    }
}
