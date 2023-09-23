@extends('layouts.app')
@section('titulo')
Prestamos | Calculadora
@endsection
@section('styles')

@endsection
@section('contenido')
<!--Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Prestamos</h1>
            <!--Title-->
            <!--Separator-->
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            <!--Separator-->
            <!--Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}"
                        class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('moneda.index') }}"
                        class="text-muted text-hover-primary">Prestamos</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Calculadora</li>
                <!--Item-->
            </ul>
            <!--Breadcrumb-->
        </div>
        <!--Page title-->
        <!--Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="#" class="btn btn-sm btn-secondary"><i class="fas fa-plus"></i> Regresar</a>
            <!-- <a href="{{ route('user.index') }}" class="btn btn-sm btn-info"
                        ><i class="fas fa-arrow-left"></i> Regresar</a> -->
        </div>
        <!--Actions-->
    </div>
    <!--Container-->
</div>
<!--Toolbar-->
<!--Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--Container-->
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush">
            <!--begin::Card body-->
            <div class="card-body ">
                <div class="row g-9">
                    <h3 class="text-dark">Detalles del Calculo</h3>
                    <div class="table-responsive">
                        <table class="table table-row-dashed">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800">
                                    <th>Tipo Prestamo</th>
                                    <th>Prestamo</th>
                                    <th>Frecuencia</th>
                                    <th>Fecha Inicio</th>
                                    <th>% de Interes</th>
                                    <th>N° de Cuotas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $datosSolicitud['tipo'] }}</td>
                                    <td>{{ $datosSolicitud['prestamo'] }}</td>
                                    <td>{{ $datosSolicitud['frecuencia'] }}</td>
                                    <td>{{ $datosSolicitud['fecha_inicio'] }}</td>
                                    <td>{{ $datosSolicitud['tasa'] }}</td>
                                    <td>{{ $datosSolicitud['cuota'] }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-row-dashed">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800">
                                    <th>#</th>
                                    <th>Saldo</th>
                                    <th>Monto</th>
                                    <th>Interés</th>
                                    <th>Fecha de Pago</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($calculos as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ number_format($item['mprestamo'], 2, ',', '.'); }}</td>
                                    <td>{{ number_format($item['mintcuota'], 2, ',', '.'); }}</td>
                                    <td>{{ number_format($item['mtasa'], 2, ',', '.'); }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--Container-->
</div>
<!--Post-->

@endsection
@section('scripts')

@endsection
