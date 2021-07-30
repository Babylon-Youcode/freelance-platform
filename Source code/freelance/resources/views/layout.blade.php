<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freelance</title>
       
<!--FONTAWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
       <link rel="stylesheet" href="/css/app.css">
    </head>
    <body >
      <nav class="navbar navbar-light bg-light">
         <div class="container-fluid">
           <a class="navbar-brand" href="/" ><img src="/img/logo.PNG" class="w-25" alt="helllo"></a>
           <div class="d-flex">
             <a class="me-2 m-auto text-decoration-none text-success " href="../login/">Login</a>
            <a href="/"> <button class="btn btn-outline-success ml-4">Sign Up</button></a>
           </div>
         </div>
       </nav>    
 @yield('contant')




 <footer class="py-3 bg-light">
    <div class="container">
       <p class="text-center">Copyright &copy; Hello I'm Hamza 2021</p>
    </div>
 </footer>
 
    </body>
</html>

    
