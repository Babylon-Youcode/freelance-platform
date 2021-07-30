<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function login(){
        return view('client.auth.login');
    }
    function register(){
        return view('client.auth.register');
    }
    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:clients',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $client = new client;
         $client->name = $request->name;
         $client->email = $request->email;
         $client->password = Hash::make($request->password);
         $save = $client->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = client::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('client/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/client/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first()];
        return view('client.dashboard', $data);
    }

    function settings(){
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first()];
        return view('client.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first()];
        return view('client.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first()];
        return view('client.staff', $data);
    }
}
