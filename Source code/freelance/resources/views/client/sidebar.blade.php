@extends('layouts.app')

@section('content')
<div>
{{ $LoggedUserInfo['name'] }}
<img class="rounded-circle ml-3 " style="width: 30px;" src="/img//{{$LoggedUserInfo->image}}" alt="hello">
</div>
</div>
</div>
</nav>

 
 <div class="container-fluid">
   <div class="row">
     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

       <div class="position-sticky pt-3">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="/client/dashboard">
               <i class="fas fa-tachometer-alt"> </i>
               Dashboard
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/client/profile">
               <i class="fas fa-user-circle"></i>
               Profile
             </a>
           </li>
          
           <li class="nav-item">
             <a class="nav-link" href="/client/project">
               <i class="fas fa-briefcase"></i>
               Projects
             </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="/client/category">
              <i class="fas fa-layer-group"></i>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/client/showPostuler">
              <i class="fas fa-layer-group"></i>
              Postulers
            </a>
          </li>
      
        
          <li class="nav-item">
            <a type="submit" data-toggle="modal" class="nav-link text-danger"  data-target="#logout"  ><i class="fas fa-sign-out-alt"></i>
              Logout</a>
            </li>
         </ul>
         <div style="height: 430px"></div>  
      </div>
      <div class="modal fade" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <h3 class="modal-title" id="staticBackdropLabel">Are You Sure You Want To Logout</h3>
                 <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                 <i class="fas fa-times"></i>
                 </button>
               </div>
               <div class="modal-body ">     
                 <a class="btn btn-primary btn-block" href="{{ route('client.logout') }}">Confirm Logout</a>
      </div> 
     </div>     
     </div>   
  </div>
     </nav>
     @yield('sidebar')

     @endsection