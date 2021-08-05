@extends('layouts.app')

@section('content')
<div>
  {{ $LoggedUserInfo['name'] }}
  <a href="/freelancer/profile">
  <img class="rounded-circle ml-3 " style="width: 30px;" src="/img/{{$LoggedUserInfo->image}}" alt="hello"></a>
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
              <i class="fas fa-layer-group"></i>
              Categorys
            </a>
          </li>
          <div style="height: 500px;"></div>
           <li class="nav-item">
             <a class="nav-link text-danger" href="{{ route('freelancer.logout') }}">
               <i class="fas fa-sign-out-alt"></i>
               Logout
             </a>
           </li>
         </ul>  
      </div>
         
     </nav>
     @yield('sidebar')

     @endsection