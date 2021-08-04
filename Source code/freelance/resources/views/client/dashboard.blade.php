@extends('client.sidebar')

@section('sidebar')

 
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>   
      </div>
      <div class="row">
        @foreach( $projectArr as $project)
        <div class="card col-lg-3 col-sm-4  m-2" >
         <img src="/img/{!! $project->image !!}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">{!! $project->name !!}</h5>
           <p class="card-text">{!! $project->description !!}</p>
           <small >{!! $project->created_at !!}</small>
         </div>
       </div>
       @endforeach
     </div>
     </main>
   </div>
 </div>
    @endsection