@extends('freelancer.sidebar')

@section('sidebar')

 
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>   
  </div>
  <h3>Clients</h3>
  <hr>
  <div class="row w-100">
    @foreach( $clientArr as $client)
    <div class="card col-lg-2 col-sm-3  m-2"  >
     <img src="/img/{!! $client->image !!}"style="height: 150px;" class="rounded-circle"  alt="...">
     <div class="card-body">
       <p class="card-title ">{!! $client->name !!}</p>
       <p class="card-title ">{!! $client->email !!}</p>
       <p class="card-text text-muted">{!! $client->type !!}</p>
     </div>
   </div>
   @endforeach
 </div>
  <h3>Projects</h3>
  <hr>
  <div class="row w-100">
    @foreach( $projectArr as $project)
    <div class="card col-lg-2 col-sm-3  m-2"  >
     <img src="/img/{!! $project->image !!}"style="height: 150px; "  alt="...">
     <div class="card-body">
       <p class="card-title ">{!! $project->name !!}</p>
       <p class="card-text text-muted">{!! $project->description !!}</p>
       <small >{!! $project->created_at !!}</small>
     </div>
   </div>
   @endforeach
 </div>
 </main>
</div>
</div>
  
    @endsection