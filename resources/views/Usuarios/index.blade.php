@extends('layout.usuarios')

@section('titulo', 'Reporte de Usuarios')

@section('contenido')

    <div class="text-center">
        <h1 class="m-5">Reporte de Usuarios</h1>
    </div>

    <div class="text-center mb-3">
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary w-35">Nuevo Usuario</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Éxito!: </strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Código Postal</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($usuario as $usuario)
                    <tr>
                        <td>{{ $usuario->idUsuario }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellidos }}</td>
                        <td>{{ $usuario->fecha_nacimiento }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->direccion }}</td>
                        <td>{{ $usuario->ciudad }}</td>
                        <td>{{ $usuario->estado }}</td>
                        <td>{{ $usuario->codigo_postal }}</td>
                        <td>{{ $usuario->cargo }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Acciones
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('usuarios.show', $usuario->idUsuario) }}">Ver</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('usuarios.edit', $usuario->idUsuario) }}">Editar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $usuario->idUsuario }}">
                                            Eliminar
                                        </a>
                                    </li>
                                </ul>

                                <!-- Modal de confirmación -->
                                <div class="modal fade" id="modalEliminar{{ $usuario->idUsuario }}" tabindex="-1" aria-labelledby="modalLabel{{ $usuario->idUsuario }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel{{ $usuario->idUsuario }}">¿Estás seguro de eliminar este usuario?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <form method="POST" action="{{ route('usuarios.destroy', $usuario->idUsuario) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
                        <td colspan="12" align="center">No hay usuarios registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
