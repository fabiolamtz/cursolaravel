@extends('layout.app')

@section('title', 'Reporte')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Reporte de Usuarios</h2>
            <div class="d-flex justify-content-between align-items-center mb-3">
                    <div text-align: right>
                    <a href="{{ route('posts.create') }}" class="btn btn-secondary">Regresar</a>
                    </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido<th>
                        <th scope="col">Correo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td scope="row">1</td>
                            <td>Juan</td>
                            <td>Perez</td>
                            <td colspan="2">perez@gmail.com</td>
                            <td>Independencia</td>
                            <td>México</td>
                            <td>Toluca</td>
                            <td>50000</td>
                            <td><div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  Acciones
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Editar</a></li>
                                  <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                </ul>
                              </div></td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Juan</td>
                            <td>Perez</td>
                            <td colspan="2">perez@gmail.com</td>
                            <td>Independencia</td>
                            <td>México</td>
                            <td>Toluca</td>
                            <td>50000</td>
                            <td>
                                <div class="btn-group" role="group">
                                <a type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  Acciones
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Editar</a></li>
                                  <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                </ul>
                              </div>
                            </td>
                        </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection
