@extends('layout.usuarios')

 @section('titulo', 'Modificar Productos')

 @section('contenido')
     <div class="text-center">
         <h1 class="m-5">Nuevo Usuario</h1>
     </div>
     <form action="{{route('usuarios.update', $usuario->idUsuario)}}" method="POST">
         @csrf
         <div class="row">
             <div class="col-md-6">
                 <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del usuario</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" value="{{$usuario->nombre}}" required>
                 </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa el apellido paterno y materno" value="{{$usuario->apellidos}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="precio" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Selecciona la fecha de nacimiento" value="{{$usuario->fecha_nacimiento}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Correo Electrónico</label>
                    <input type="mail" class="form-control" id="email" name="email" placeholder="Escribe tu email" value="{{$usuario->email}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa una nueva contraseña" required>
                </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Teléfono</label>
                   <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Registra tu número de teléfono" value="{{$usuario->telefono}}" required>
               </div>
            </div>
            <div class="col-md-12">
               <div class="mb-3">
                   <label for="stock" class="form-label">Dirección</label>
                   <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la dirección" value="{{$usuario->direccion}}" required>
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Ciudad</label>
                   <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Escribe la ciudad" value="{{$usuario->ciudad}}" required>
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Estado</label>
                   <input type="text" class="form-control" id="estado" name="estado" placeholder="Escribe el estado" value="{{$usuario->estado}}" required>
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
                   <label for="stock" class="form-label">Código Postal</label>
                   <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Escribe el código postal" value="{{$usuario->codigo_postal}}" required>
               </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escribe el cargo obtenido" value="{{$usuario->cargo}}" required>
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
