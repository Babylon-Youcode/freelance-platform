@extends('freelancer.sidebar')

@section('sidebar')
 
     <main class="col-md-9 ms-sm-auto  col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Profile</h1>
         <div>
         <button type="submit" data-toggle="modal" class="btn mt-1  btn-success  "  data-target="#update-modal"  >Update Profile <i class="fas fa-user"></i></button>
         <button type="submit" data-toggle="modal" class="btn mt-1  btn-warning "  data-target="#update-password" >Change password <i class="fas fa-key"></i></button>
      </div>
       </div>

       @if(Session::get('success'))
       <div class="alert alert-success">
          {{ Session::get('success') }}
       </div>
     @endif
     <div class="row">
        <div class="col-6">
     <img class="rounded-circle w-25 ml-5 " src="../{{$LoggedUserInfo->image}}" alt="hello">
       <h2>{{$LoggedUserInfo->name}}</h2>
       <h3>{{$LoggedUserInfo->email }}</h3>
       <h3>{{$LoggedUserInfo->experience}}</h3>
     
    
   </div>
   </div>
      
      
      
      
      
      
     
        
        

      {{-- update profile y--------------------}}
         <div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
                  <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/freelancer/update/{{$LoggedUserInfo->id }}" method="post">
                     @csrf
                     <div class="form-group">
                           <label>Name</label>
                           <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{$LoggedUserInfo->name}}">
                           <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{$LoggedUserInfo->email }}">
                           <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                           <label>Experience</label>
                           <input type="text" class="form-control" name="experience" value="{{$LoggedUserInfo->experience}}" placeholder="Enter password">
                           <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Update</button>
                     </form>   
                 </div>
              </div>
            </div>
          </div>

          <!-- update password -->
<div class="modal fade" id="update-password" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h3 class="modal-title" id="staticBackdropLabel">Change Password</h3>
         <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
       </div>
       <div class="modal-body">
      <form method="post">
     <div class="card radius p-3 m-auto " >
     <div class="card-body">
     <div class="form-group mt-3">
         <label>Change Password :</label>
         <input type="password" name="password"   class="form-control form-control-lg" required/>
         <p class="mt-3">last modification </p>
     </div>
             <button type="submit" name="reset" class="btn btn-dark form-control btn-lg  btn-block">Reset</button>
     </div>
    
     </div>
     </form>
     </div>
   </div>
    
    </div>
   </div>
    {{-- end ohf reset password---------------- --}}

      
      
     </main>
   </div>
 </div>
 
    @endsection