@extends('layouts.app')

@section('title', 'Descargas - Rico Pollo')

@section('content')
<section class="py-5">
    <div class="container">
        <p class="section-title mb-1">Documentos</p>
        <h2 class="h3 mb-4">Descargas</h2>
        <p class="mb-4">
            Desde esta sección podrás descargar documentos informativos en
            formato Excel y Word. Solo haz clic en el botón correspondiente:
        </p>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>Presentación corporativa Rico Pollo (Word)</strong><br>
                    <span class="text-muted small">Resumen institucional y datos generales.</span>
                </div>
                <a
                    href="{{ asset('archivos/presentacion-rico-pollo.docx') }}"
                    class="btn btn-sm btn-rp"
                    download
                >
                    Descargar .docx
                </a>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>Listado de productos y formatos (Excel)</strong><br>
                    <span class="text-muted small">Catálogo básico de productos y presentaciones.</span>
                </div>
                <a
                    href="{{ asset('archivos/catalogo-productos-rico-pollo.xlsx') }}"
                    class="btn btn-sm btn-rp"
                    download
                >
                    Descargar .xlsx
                </a>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>Ficha técnica estándar (Word)</strong><br>
                    <span class="text-muted small">Modelo editable de ficha técnica por producto.</span>
                </div>
                <a
                    href="{{ asset('archivos/ficha-tecnica-rico-pollo.docx') }}"
                    class="btn btn-sm btn-rp"
                    download
                >
                    Descargar .docx
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
