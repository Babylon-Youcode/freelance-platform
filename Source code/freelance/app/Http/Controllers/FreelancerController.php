<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    function login(){
        return view('freelancer.auth.login');
    }
    function register(){
        return view('freelancer.auth.register');
    }
    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:freelancers',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $freelancer = new freelancer;
         $freelancer->name = $request->name;
         $freelancer->email = $request->email;
         $freelancer->password = Hash::make($request->password);
         $save = $freelancer->save();

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

        $userInfo = freelancer::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('freelancer/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/freelancer/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>freelancer::where('id','=', session('LoggedUser'))->first()];
        return view('freelancer.dashboard', $data);
    }

    function settings(){
        $data = ['LoggedUserInfo'=>freelancer::where('id','=', session('LoggedUser'))->first()];
        return view('freelancer.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>freelancer::where('id','=', session('LoggedUser'))->first()];
        return view('freelancer.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>freelancer::where('id','=', session('LoggedUser'))->first()];
        return view('freelancer.staff', $data);
    }
}
