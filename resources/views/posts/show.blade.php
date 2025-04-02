@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Nuevo Post</a>
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
