@extends('layouts.app')

@section('content')
{{ $LoggedUserInfo['name'] }}
</div>

</div>
</nav>
<div class="container-fluid">
   <div class="row">
     <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
       <div class="position-sticky pt-3">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="/freelancer/dashboard">
               <i class="fas fa-tachometer-alt"> </i>
               Dashboard
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/freelancer/profile">
               <i class="fas fa-user-circle"></i>
               Profile
             </a>
           </li>
          
           <li class="nav-item">
             <a class="nav-link" href="/freelancer/staff">
               <i class="fas fa-briefcase"></i>
               Projects
             </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="/freelancer/settings">
              <i class="fas fa-cogs"></i>
              Settings
            </a>
          </li>
           <li class="nav-item">
             <a class="nav-link text-danger" href="{{ route('freelancer.logout') }}">
               <i class="fas fa-sign-out-alt"></i>
               Logout
             </a>
           </li>
         </ul>  
      </div>
         
     </nav>
 
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <h1 class="h2">Profile</h1>
      
       </div>
 
       
 
       
     </main>
   </div>
 </div>
 
    @endsection