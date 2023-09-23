<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('prestamo.calcular') }}">
                @csrf
            <div class="modal-header">
                <h2 class="modal-title">Calculadora de Prestamos</h2>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                    </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body row g-4">
                <div class="col-md-12">
                    <label class="form-label">Tipo de Prestamos</label>
                    <select class="form-select" name="tipo_prestamo" aria-label="Select example">
                        <option>Seleccione...</option>
                        <option value="Insoluto">Insoluto</option>
                        <option value="Capitalizado">Capitalizado</option>
                        <option value="Amortizado">Amortizado</option>
                        <option value="Capitalizado Fijo Generado">Capitalizado Fijo Generado</option>
                        <option value="Capitalizado Fijo con Cuotas">Capitalizado Fijo con Cuotas</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Monto</label>
                    <input type="number" name="monto" class="form-control form-control-solid" placeholder="Ejemplo: 5000"/>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Tasa %</label>
                    <input type="number" name="tasa" class="form-control form-control-solid" placeholder="Ej: 10 "/>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Frecuencia de Pago</label>
                    <select class="form-select" name="frecuencia" aria-label="Select example">
                        <option>Seleccione...</option>
                        <option value="Diario">Diario (1 día)</option>
                        <option value="Interdiario">Interdiario (2 días)</option>
                        <option value="Semanal">Semanal (7 días)</option>
                        <option value="Cada 8 días">Cada 8 días (8 días)</option>
                        <option value="Bi-Semanal">Bi-Semanal (14 días)</option>
                        <option value="Quincenal">Quincenal (15 días)</option>
                        <option value="Cuatro Semanas">Cuatro Semanas (28 días)</option>
                        <option value="Mensual">Mensual (30 días)</option>
                        <option value="Trimestral">Trimestral (90 días)</option>
                        <option value="Semestral">Semestral (180 días)</option>
                        <option value="Anual">Anual (365 días)</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Cuotas</label>
                    <input type="number" name="cuotas" class="form-control form-control-solid" placeholder="Ej: 10 "/>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" class="form-control form-control-solid" />
                </div>
                <div class="col-md-3">
                    <label class="form-label">Costo de Cierre</label>
                    <input type="number" name="costo_cierre" class="form-control form-control-solid" placeholder="Ejemplo: 100"/>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            </form>
        </div>
    </div>
</div>
