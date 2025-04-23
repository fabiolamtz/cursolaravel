@extends('layout.usuarios')

@section('titulo', 'Nuevos Usuarios')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Registrar Nuevos Usuarios</h1>
    </div>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del usuario</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ingresa el nombre">
                    @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" placeholder="Ingresa el apellido paterno y materno">
                    @error('apellidos')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                    @error('fecha_nacimiento')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Escribe tu email">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresa una contraseña">
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Registra tu número de teléfono">
                    @error('telefono')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion') }}" placeholder="Ingresa la dirección">
                    @error('direccion')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" placeholder="Escribe la ciudad">
                    @error('ciudad')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{ old('estado') }}" placeholder="Escribe el estado">
                    @error('estado')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="codigo_postal" class="form-label">Código Postal</label>
                    <input type="number" class="form-control @error('codigo_postal') is-invalid @enderror" id="codigo_postal" name="codigo_postal" value="{{ old('codigo_postal') }}" placeholder="Escribe el código postal">
                    @error('codigo_postal')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" class="form-control @error('cargo') is-invalid @enderror" id="cargo" name="cargo" value="{{ old('cargo') }}" placeholder="Escribe el cargo obtenido">
                    @error('cargo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Guardar Usuario</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary w-100">Regresar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
