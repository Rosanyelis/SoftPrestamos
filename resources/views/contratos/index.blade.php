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
                        <h4 class="card-title">Contratos</h4>
                    </div>
                <div class="header-action">
                    
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-1" class="table data-table table-sm table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Contrato de Prestamo sin Garantia</td>
                                <td>
                                    <a href="#" class="btn btn-link text-info p-0"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Contrato de Prestamo con Garantia</td>
                                <td>
                                    <a href="#" class="btn btn-link text-info p-0"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
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
