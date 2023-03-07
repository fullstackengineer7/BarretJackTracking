<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use Hash;
use Auth;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    //
   
    public function adminLogin(Request $request){
        return view('admin/home');
        // var_dump("aaa");die();

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        
        // $credentials = $request->only('email', 'password');
        //     // var_dump($request->password);die();
        // if (Auth::attempt($credentials)) {
        //     return view('admin/home');
        //     // if(auth::user()->unique_ref_id == "admin")
        //     //     return redirect()->intended('dashboard');
        // }
  
        // return redirect("home")->withSuccess('Login details are not valid');
    }

    public function showSignin(Request $req){
        return view('admin/auth/sign-in');
    }
    public function showSignup(Request $req){
        return view('admin/auth/sign-up');
    }

    public function signin(Request $req){

        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // if(auth::user()->unique_ref_id == "admin")
            //     return view('admin.dashboard');
            // else
            //     return redirect()->intended('home')
            //             ->withSuccess('Signed in');
            return view('admin/home');
        }  
        return view('admin.auth.sign-in');
        // return redirect("home")->withSuccess('Login details are not valid');
    }

    public function signup(Request $req){
        if($req->password != $req->confirm_password){
            return response()->json(['status' => false, 'error' => "Your password confirmation doesn't match"]);
        }

        // $req->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|string|confirmed',
        // ]);
           
        // $data = $request->all();
        $data = [
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'phone_number' => $req->phone_number,
            'created_at' => date('Y-m-d H:i:s'),
            'industry' => 'aaa'
        ];
        User::create($data);
        // var_dump("expression");die();
        
        return redirect("api/show-sign-in")->withSuccess('You have signed up');
    }

    public function signout() {
        Session::flush();
        Auth::logout();  
        return Redirect('home');
    }
}
