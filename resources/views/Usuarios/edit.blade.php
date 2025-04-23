@extends('layout.usuarios')

 @section('titulo', 'Modificar Productos')

 @section('contenido')
     <div class="text-center">
         <h1 class="m-5">Editar Usuario</h1>
     </div>
     <form action="{{route('usuarios.update', $usuario->idUsuario)}}" method="POST">
         @csrf
         <div class="row">
             <div class="col-md-6">
                 <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del usuario</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$usuario->nombre}}" placeholder="Ingresa el nombre">
                    @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                 </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Apellidos</label>
                    <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{$usuario->apellidos}}" placeholder="Ingresa el apellido paterno y materno">
                    @error('apellidos')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="precio" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}">
                    @error('fecha_nacimiento')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$usuario->email}}" placeholder="Escribe tu email">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Nueva Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa una contraseña">
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Teléfono</label>
                   <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{$usuario->telefono}}" placeholder="Registra tu número de teléfono">
                    @error('telefono')<div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
            </div>
            <div class="col-md-12">
               <div class="mb-3">
                   <label for="stock" class="form-label">Dirección</label>
                   <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{$usuario->direccion}}" placeholder="Ingresa la dirección">
                    @error('direccion')<div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Ciudad</label>
                   <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value="{{$usuario->ciudad}}" placeholder="Escribe la ciudad">
                    @error('ciudad')<div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Estado</label>
                   <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{$usuario->estado}}" placeholder="Escribe el estado">
                    @error('estado')<div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Código Postal</label>
                   <input type="number" class="form-control @error('codigo_postal') is-invalid @enderror" id="codigo_postal" name="codigo_postal" value="{{$usuario->codigo_postal}}" placeholder="Escribe el código postal">
                   @error('codigo_postal')<div class="invalid-feedback">{{ $message }}</div>@enderror
               </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Cargo</label>
                    <input type="text" class="form-control @error('cargo') is-invalid @enderror" id="cargo" name="cargo" value="{{$usuario->cargo}}" placeholder="Escribe el cargo obtenido">
                    @error('cargo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
             </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <a href="{{route('usuarios.index')}}" class="btn btn-danger w-100">Cancelar</a>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <button type="submit" class="btn btn-success w-100">Actualizar usuario</button>
                 </div>
             </div>
         </div>
     </form>
 @endsection
