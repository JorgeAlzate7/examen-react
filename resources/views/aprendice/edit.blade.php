@extends('layouts.app')

@section('css')

<link
    rel="stylesheet"
    href="{{ asset('css/pages/aprendice.css') }}"
>

@endsection


@section('content')

<div class="container aprendice-page">

    <!-- ENCABEZADO -->

    <div class="aprendice-header">

        <div>

            <h1>Actualizar aprendiz</h1>

            <p>
                Modifica la información del aprendiz.
            </p>

        </div>

    </div>


    <!-- FORMULARIO -->

    <div class="aprendice-form-card">

        <form
            action="{{ route('aprendice.update', $aprendice) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <!-- NOMBRE -->

            <div class="mb-3">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ old('name', $aprendice->name) }}"
                    placeholder="Ingrese el nombre"
                >

            </div>


            <!-- EMAIL -->

            <div class="mb-3">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    value="{{ old('email', $aprendice->email) }}"
                    placeholder="Ingrese el correo"
                >

            </div>


            <!-- CELULAR -->

            <div class="mb-3">

                <label for="cell_number">
                    Número celular
                </label>

                <input
                    type="text"
                    name="cell_number"
                    id="cell_number"
                    class="form-control"
                    value="{{ old('cell_number', $aprendice->cell_number) }}"
                    placeholder="Ingrese el número celular"
                >

            </div>


            <!-- CURSO -->

            <div class="mb-3">

                <label for="course_id">
                    Curso
                </label>

                <select
                    name="course_id"
                    id="course_id"
                    class="form-select"
                >

                    <option value="">
                        Seleccione un curso
                    </option>

                    @foreach ($courses as $course)

                        <option
                            value="{{ $course->id }}"
                            {{ $aprendice->course_id == $course->id ? 'selected' : '' }}
                        >

                            {{ $course->course_number }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- COMPUTADOR -->

            <div class="mb-3">

                <label for="computer_id">
                    Computador
                </label>

                <select
                    name="computer_id"
                    id="computer_id"
                    class="form-select"
                >

                    <option value="">
                        Seleccione un computador
                    </option>

                    @foreach ($computers as $computer)

                        <option
                            value="{{ $computer->id }}"
                            {{ $aprendice->computer_id == $computer->id ? 'selected' : '' }}
                        >

                            {{ $computer->serial_number }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- BOTONES -->

            <div class="aprendice-form-buttons">

                <button
                    type="submit"
                    class="aprendice-btn-save"
                >

                    <i class="bi bi-check-circle"></i>

                    Actualizar aprendiz

                </button>


                <a
                    href="{{ route('aprendice.index') }}"
                    class="aprendice-btn-cancel"
                >

                    Cancelar

                </a>

            </div>

        </form>

    </div>

</div>

@endsection