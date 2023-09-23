@extends('layouts.app')
@section('titulo')
    Dashboard
@endsection
@section('styles')

@endsection
@section('contenido')
			<!--Toolbar-->
			<div class="toolbar" id="kt_toolbar">
				<!--Container-->
				<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
					<!--Page title-->
					<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
						<!--Title-->
						<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
						<!--Title-->
					</div>
					<!--Page title-->
					<!--Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3">
						<!--Secondary button-->
						<!--Secondary button-->
						<!--Primary button-->
						<!-- <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> -->
						<!--Primary button-->
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

				</div>
				<!--Container-->
			</div>
			<!--Post-->
@endsection
@section('scripts')

@endsection
