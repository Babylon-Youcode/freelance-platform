@extends('client.sidebar')

@section('sidebar')

 
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Projects</h1>
         <button type="submit" data-toggle="modal" class="btn mt-1  btn-success  "  data-target="#add-project"  >Add Project </button>    
       </div>
 
       <h2>Section title</h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
             </tr>
           </thead>
           <tbody>
 
        @foreach( $myProjects as $project)
             <tr>
            
                 <td>{!! $project->id !!}</td>
                 <td>{!! $project->name !!}</td>
                 <td>{!! $project->description !!}</td>
                 <td>{!! $project->created_at !!}</td>
                 <td><a class="btn mt-1  btn-danger"  href="/client/deleteProject/{{$project->id}}">Delete</a> |  <button type="submit" data-toggle="modal" class="btn mt-1  btn-info "  data-target="#update"  >Update Project </button>   </td>
    
            
           {{-- update------------------------------ --}}
             <div class="modal fade" id="update" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Update Project</h3>
                    <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/client/editProject/{!! $project->id !!}" method="post">
                       @csrf
                       <div class="form-group">
                             <label>Name</label>
                             <input type="text" class="form-control" name="name" value="{!! $project->name !!}" >
                          </div>
                
                          <div class="form-group">
                             <label>Description</label>
                             <textarea class="form-control" name="description" cols="30" rows="5">{!! $project->description !!}</textarea>
                          </div>
                      
                          <button type="submit" class="btn btn-block btn-success">Update</button>
                       </form>   
                   </div>
                </div>
              </div>
            </div>
          </tr>  
             @endforeach
  
          </tbody>
       </table>
     </div>
       
   {{-- update profile y--------------------}}
   <div class="modal fade" id="add-project" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="staticBackdropLabel">Add Project</h3>
          <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <form action="/client/addProject/" method="post">
             @csrf
             <div class="form-group">
                   <label>Name</label>
                   <input type="text" class="form-control" name="name" >
                </div>
      
                <div class="form-group">
                   <label>Description</label>
                   <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                </div>
            
                <button type="submit" class="btn btn-block btn-success">Add</button>
             </form>   
         </div>
      </div>
    </div>
  </div>


 

     </main>
   </div>
 </div>
    @endsection