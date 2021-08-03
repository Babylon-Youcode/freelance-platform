<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Session;
// use Illuminate\Support\Facades\Auth;
use App\Models\project;
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
            $request->session()->put('LoggedUser',  $client->id);
            return redirect('client/dashboard');
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
            return redirect('/');
        }
    }
    public function update(Request  $request, $id){
        $client = client::find($id);
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->type = $request->input('type');
        $client->category = $request->input('category');
        $save=  $client->save();
        if ($save) {
        return redirect('/client/profile')->with('success','You have successfuly update your profile');
        }
   }
    function dashboard(){
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first(),'projectArr'=>project::all()];
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
        $data = ['LoggedUserInfo'=>client::where('id','=', session('LoggedUser'))->first() ,'myProjects'=>project::where('client_id','=', session('LoggedUser'))->get() ];
        return view('client.staff', $data);
    }


function addProject(Request $request){
        
    //Validate requests
    $request->validate([
        'name'=>'required',
        'description'=>'required',
       
    ]);

     //Insert data into database
     $project = new project;
     $project->name = $request->name;
     $project->description = $request->description;
     $project->client_id =session()->get('LoggedUser');
     $save = $project->save();

     if($save){
        return redirect('client/staff');
     }else{
         return back()->with('fail','Something went wrong, try again later');
     }
}

function deleteProject($id){
    project::destroy(array('id',$id));
    return redirect('client/staff');
}

// function findProject($id)
// {
//     return view('client/staff')->with('findProject', project::find($id));
// }
 function editProject(Request  $request, $id){

    $request->validate([
        'name'=>'required',
        'description'=>'required',
       
    ]);
    $project = project::find($id);
    $project->name = $request->name;
    $project->description = $request->description;
    $project->save();
    return redirect('client/staff');
}
}