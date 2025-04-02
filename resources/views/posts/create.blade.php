@extends('layout.app')
@section('title', 'Crear Nuevo Post')

@section('content')
<div class="card">
    <div class="card-body">
        <h1  style="text-align: center;" >Crear Nuevo</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                    <div text-align: right>
                    <!--<a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>-->
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
                    </div>
            </div>
            <form class="row g-3" action="{{ route('posts.show') }}" method="POST">
                <div class="row g-3">
                    <div class="col">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" aria-label="Apellido">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="example@gmail.com" name="correo">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="direccion">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="inputCity" name="ciudad">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Estado</label>
                        <select id="inputState" class="form-select" name="estado">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Código Postal</label>
                        <input type="text" class="form-control" id="inputZip" name="cp">
                    </div>
                </div>
                <br>
                <br>
                <div class="col-12"  style="text-align: center;">
                    <a href="{{ route('posts.show') }}" class="btn btn-primary" type="submit">Guardar</a>
                </div>
                <br>
            </form>
    </div>
</div>

   <!-- @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
             @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        <li>
    @endforeach-->
@endsection
