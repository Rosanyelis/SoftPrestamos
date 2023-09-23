@extends('layouts.app')
@section('titulo')
Configuraciones | Usuarios
@endsection
@section('styles')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}"
    rel="stylesheet" type="text/css" />
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
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Monedas</h1>
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}"
                        class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-300 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Monedas</li>
                <!--Item-->
            </ul>
            <!--Breadcrumb-->
        </div>
        <!--Page title-->
        <!--Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{ route('moneda.create') }}" class="btn btn-sm btn-success"><i
                    class="fas fa-plus"></i> Nueva
                Moneda</a>
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
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-2 gs-7 rounded">
                    <thead>
                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                            <th width="60px">#</th>
                            <th class="min-w-120px">Moneda</th>
                            <th class="text-end min-w-70px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->moneda }}</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"><i
                                            class="fas fa-ellipsis-v"></i>
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.edit', $item->id) }}"
                                                class="menu-link px-3">
                                                <i class="fas fa-pencil-alt text-info"></i>&nbsp;&nbsp;Editar</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.edit', $item->id) }}"
                                                class="menu-link px-3">
                                                <i
                                                    class="fas fa-clipboard-list text-warning"></i>&nbsp;&nbsp;Agregar Precio Actual</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.edit', $item->id) }}"
                                                class="menu-link px-3">
                                                <i
                                                    class="fas fa-clipboard-list text-warning"></i>&nbsp;&nbsp;Historial de Precios</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-customer-table-filter="delete_row">
                                                <i class="fas fa-trash-alt text-danger"></i>&nbsp;&nbsp;Eliminar</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--Container-->
</div>
<!--Post-->

@endsection
@section('scripts')
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    "use strict";
    $("#kt_datatable_example_5").DataTable({
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "_MENU_",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
            // "lengthMenu": " _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
    const deleteButtons = document.querySelectorAll('[data-kt-customer-table-filter="delete_row"]');

    deleteButtons.forEach(d => {
        // Delete button on click
        d.addEventListener('click', function (e) {
            e.preventDefault();

            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
            Swal.fire({
                text: "Está seguro de eliminar el registro",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "No, cancelar",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function (result) {
                if (result.value) {
                    // Simulate delete request -- for demo purpose only
                    Swal.fire({
                        text: "Eliminando...",
                        icon: "info",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function () {
                        Swal.fire({
                            text: "You have deleted !.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // delete row data from server and re-draw datatable
                            dt.draw();
                        });
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: " was not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    });
                }
            });
        });
    });

</script>
<!--end::Page Vendors Javascript-->
@endsection
