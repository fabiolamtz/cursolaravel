<!DOCTYPE html>
 <html lang="es">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <title>@yield('titulo') | Curso Avanzado de Laravel</title>
         <style>
             .footer{
                 position: fixed;
                 bottom: 0;
                 left: 0;
                 right: 0;
                 width: 100%;
                 padding: 10px;
             }

         </style>
     </head>
     <body>
         <div class="container" aling="center">
             <nav class="navbar navbar-expand-lg navbar-ligt bg-ligt">
                 <div class="container-fluid" aling="center">
                     <a class="navbar-brand"  href="{{url('/')}}">Inventario de Productos</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="moduloProductos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Productos
                                 </a>
                                 <ul class="dropdown-menu" aria-labelledby="moduloProductos">
                                   <li><a class="dropdown-item" href="{{route('productos.index')}}">Ver productos</a></li>
                                   <li><a class="dropdown-item" href="{{route('productos.create')}}">Registrar Productos</a></li>
                                 </ul>
                             </li>
                         </ul>
                         <!--<ul class="navbar-nav">
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="otroModulo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Otro modulo
                                 </a>
                                 <ul class="dropdown-menu" aria-labelledby="otroModulo">
                                   <li><a class="dropdown-item" href="#">Otro submodulo</a></li>
                                   <li><a class="dropdown-item" href="#">Otro submodulo</a></li>
                                 </ul>
                             </li>-->
                         </ul>
                     </div>
                 </div>
             </nav>
             <div>
                 @yield('contenido')
             </div>
             <div class="py-3 my-4 footer text-muted text-center">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p class="text-center text-body-secondary">© {{ date('Y') }} FabiMtz</p>
             </div>
         </div>
     </body>
 </html>
