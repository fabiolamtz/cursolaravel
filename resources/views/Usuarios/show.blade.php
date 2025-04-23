@extends('layout.productos')

 @section('titulo', 'Ver producto')

 @section('contenido')
     <div class="text-center">
         <h1 class="m-5">Ver un Producto</h1>
     </div>
     <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
               <label for="nombre" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" value="{{$usuario->nombre}}" disabled>
            </div>
        </div>
        <div class="col-md-6">
           <div class="mb-3">
               <label for="descripcion" class="form-label">Apellidos</label>
               <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa el apellido paterno y materno" value="{{$usuario->apellidos}}" disabled>
           </div>
       </div>
       <div class="col-md-6">
           <div class="mb-3">
               <label for="precio" class="form-label">Fecha de Nacimiento</label>
               <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Selecciona la fecha de nacimiento" value="{{$usuario->fecha_nacimiento}}" disabled>
           </div>
       </div>
       <div class="col-md-6">
           <div class="mb-3">
               <label for="stock" class="form-label">Correo Electrónico</label>
               <input type="mail" class="form-control" id="email" name="email" placeholder="Escribe tu email" value="{{$usuario->email}}" disabled>
           </div>
       </div>
       <div class="col-md-6">
          <div class="mb-3">
              <label for="stock" class="form-label">Teléfono</label>
              <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Registra tu número de teléfono" value="{{$usuario->telefono}}" disabled>
          </div>
       </div>
       <div class="col-md-12">
          <div class="mb-3">
              <label for="stock" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la dirección" value="{{$usuario->direccion}}" disabled>
          </div>
       </div>
       <div class="col-md-6">
          <div class="mb-3">
              <label for="stock" class="form-label">Ciudad</label>
              <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Escribe la ciudad" value="{{$usuario->ciudad}}" disabled>
          </div>
       </div>
       <div class="col-md-6">
          <div class="mb-3">
              <label for="stock" class="form-label">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado" placeholder="Escribe el estado" value="{{$usuario->estado}}" disabled>
          </div>
       </div>
       <div class="col-md-6">
          <div class="mb-3">
              <label for="stock" class="form-label">Código Postal</label>
              <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Escribe el código postal" value="{{$usuario->codigo_postal}}" disabled>
          </div>
       </div>
       <div class="col-md-6">
           <div class="mb-3">
               <label for="stock" class="form-label">Cargo</label>
               <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escribe el cargo obtenido" value="{{$usuario->cargo}}" disabled>
           </div>
        </div>
         <div class="col-md-6">
             <div class="mb-3">
                 <a href="{{route('usuarios.index')}}" class="btn btn-danger w-100">Regresar</a>
             </div>
         </div>
     </div>
 @endsection
