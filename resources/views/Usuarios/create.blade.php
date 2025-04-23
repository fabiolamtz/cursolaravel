@extends('layout.usuarios')

 @section('titulo', 'Nuevos Usuarios')

 @section('contenido')
     <div class="text-center">
         <h1 class="m-5">Registrar Nuevos Usuarios</h1>
     </div>
     <form action="{{route('usuarios.store')}}" method="POST">
         @csrf
         <div class="row">
             <div class="col-md-6">
                 <div class="mb-3">
                     <label for="nombre" class="form-label">Nombre del usuario</label>
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <label for="descripcion" class="form-label">Apellidos</label>
                     <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa el apellido paterno y materno" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <label for="precio" class="form-label">Fecha de Nacimiento</label>
                     <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Selecciona la fecha de nacimiento" required>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <label for="stock" class="form-label">Correo Electrónico</label>
                     <input type="mail" class="form-control" id="email" name="email" placeholder="Escribe tu email" required>
                 </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa una contraseña" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Registra tu número de teléfono" required>
                </div>
             </div>
             <div class="col-md-12">
                <div class="mb-3">
                    <label for="stock" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la dirección" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Escribe la ciudad" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Escribe el estado" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Código Postal</label>
                    <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Escribe el código postal" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <label for="stock" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escribe el cargo obtenido" required>
                </div>
             </div>
             <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Guardar Usuario</button>
                </div>
            </div>
             <div class="col-md-6">
                 <div class="mb-3">
                     <a href="{{route('usuarios.index')}}" class="btn btn-primary w-100">Regresar</a>
                 </div>
             </div>
         </div>
     </form>
 @endsection
