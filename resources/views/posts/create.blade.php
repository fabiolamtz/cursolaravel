@extends('layout.app')
@section('title', 'Crear Nuevo Post')

@section('content')
<div class="card">
    <div class="card-body"  style="text-align: center;">
        <h1 aling="center" >Crear Nuevo</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Regresar</a>
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
        <li>
    @endforeach
@endsection
