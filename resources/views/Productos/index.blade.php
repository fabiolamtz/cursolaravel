@extends('layout.productos')

 @section('titulo', 'Reporte de productos')

 @section('contenido')
     <div class="text-center">
         <h1 class="m-5">Reporte de Productos</h1>
     </div>
     <div class="text-center mb-3">
         <a href="{{route('productos.create')}}" class="btn btn-primary w-35">Nuevo Producto</a>
     </div>
     @if (session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>¡Exito!: </strong> {{session('success')}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
     @endif
     <table class="table table-striped">
         <thead>
             <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Descripción</th>
                 <th scope="col">Precio</th>
                 <th scope="col">Stock</th>
                 <th scope="col">Acciones</th>
             </tr>
         </thead>
         <tbody>
             @forelse($productos as $producto)
                 <tr>
                     <td>{{$producto->idProducto}}</td>
                     <td>{{$producto->nombre}}</td>
                     <td>{{$producto->descripcion}}</td>
                     <td>{{$producto->precio}}</td>
                     <td>{{$producto->stock}}</td>
                     <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                               Acciones
                             </button>
                             <!--<ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="{{route('productos.show', $producto->idProducto)}}">Ver</a></li>
                                 <li><a class="dropdown-item" href="{{route('productos.edit', $producto->idProducto)}}">Editar</a></li>
                                 <li><a class="dropdown-item" href="{{route('productos.destroy', $producto->idProducto)}}">Eliminar</a>
                                </li>
                             </ul>-->
                             <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('productos.show', $producto->idProducto) }}">Ver</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('productos.edit', $producto->idProducto) }}">Editar</a>
                                </li>
                                <li>
                                    <!-- Botón para activar el modal -->
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $producto->idProducto }}">
                                        Eliminar
                                    </a>
                                </li>
                            </ul>

                            <!-- Modal de confirmación -->
                            <div class="modal fade" id="modalEliminar{{ $producto->idProducto }}" tabindex="-1" aria-labelledby="modalLabel{{ $producto->idProducto }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $producto->idProducto }}">¿Estás seguro de eliminar este producto?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                                            <!-- Formulario para eliminar -->
                                            <form method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class=" btn btn-danger" type="button" href="{{route('productos.destroy', $producto->idProducto)}}">Eliminar</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </td>
                 </tr>
             @empty
                 <tr>
                     <td colspan="6" align="center">No hay producto registrados</td>
                 </tr>
             @endforelse
         </tbody>
 @endsection
