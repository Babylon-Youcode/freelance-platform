<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  
    public function delete($id){
        project::destroy(array('id',$id));
        return redirect('/');
    }

 

    public function create(Request $req){
        

        $project = new project;
        $project->tache = $req->input('tache');
        $project->save();
        return redirect('/');
    }

    public function edit($id){
          
        return view('edit')->with('projectArr_tache',project::find($id));
   }

    public function edit_submit(Request $req, $id){

       
         $project = project::find($id);
         $project->tache = $req->input('tache');
         $project->save();
         return redirect('/');
    }
}
