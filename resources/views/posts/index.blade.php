@extends('layout.app')
@section('title', 'Inicio')

@section('content')
<div class="card">
    <div class="card-body"  style="text-align: center;">
   <p><h1>Inicio</h1></p>
        <div class="d-flex justify-content-between align-items-center mb-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Crear Nuevo Post
            </button>
            <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Estas Seguro de Continuar?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Ha clic en el botón para registrar un nuevo post
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

        </form>
    </li>
    @endforeach
@endsection






