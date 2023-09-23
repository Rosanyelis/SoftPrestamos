@extends('layouts.app')
@section('titulo')
Configuraciones | Monedas
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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Usuarios</h1>
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
                        class="text-muted text-hover-primary">Monedas</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Nueva Moneda</li>
                <!--Item-->
            </ul>
            <!--Breadcrumb-->
        </div>
        <!--Page title-->
        <!--Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{ route('moneda.index') }}" class="btn btn-sm btn-secondary"><i
                    class="fas fa-plus"></i> Regresar</a>
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
                <form class="row g-9" action="{{ route('moneda.store') }}" method="POST">
                    @csrf
                    <div class="col-md-4">
                        <label for="exampleFormControlInput1" class="required form-label">Moneda</label>
                        <input type="text" name="moneda" class="form-control form-control-solid" placeholder="Dólar"
                        value="{{ old('moneda') }}"/>
                        @if ($errors->has('moneda'))
                            <span class="text-danger">
                                {{ $errors->first('moneda') }}
                            </span>
                        @endif
                    </div>
                    <!--begin::Actions-->
                    <div class="text-end">
                        <button type="reset" class="btn btn-light me-3">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <!--end::Actions-->
                </form>
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
