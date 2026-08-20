@extends('layouts.app')

@section('css')

<link
    rel="stylesheet"
    href="{{ asset('css/pages/aprendice.css') }}"
>

@endsection

@section('content')

<link
    rel="stylesheet"
    href="{{ asset('css/pages/aprendice.css') }}"
>

<div class="container aprendice-page">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Aprendiz #{{ $aprendiz->id }}</h5>
            <a href="{{ route('aprendice.index') }}" class="btn btn-sm btn-light">Volver</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $aprendiz->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Correo del Aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Numero del Aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->cell_number }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Curso del Aprendiz:</label>
                <p class="fs-5">{{ $aprendiz-> course-> course_number ?? 'sin curso' }} - {{ $aprendiz->course->day ?? '' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Computador del Aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->computer->brand ?? 'sin computador'}}</p>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('area.index') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection