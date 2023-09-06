@extends('layouts.app')
@section('titulo')
    Configuraciones | Usuarios
@endsection
@section('styles')
    
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Usuarios</h4>
                    </div>
                <div class="header-action">
                    <a href="" class="btn btn-primary mt-2">
                        <i class="bi bi-plus-lg"></i>
                        Nuevo Usuario
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-1" class="table data-table table-sm table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Roles</th>
                                <th>Sucursal</th>
                                <th>Estatus</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>SuperUsuarios</td>
                                    <td>Ninguna</td>
                                    <td>Activo</td>
                                    <td>
                                        <a href="" class="btn btn-link btn-sm text-info p-0"><i class="bi bi-eye-fill"></i></a>
                                        <a href="" class="btn btn-link btn-sm text-warning p-0"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="" class="btn btn-link btn-sm text-success p-0"><i class="bi bi-lock-fill"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    
@endsection
