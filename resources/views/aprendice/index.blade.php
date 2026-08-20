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

            <h1>Aprendices</h1>

            <p>
                Administración de aprendices registrados en el sistema.
            </p>

        </div>


        <a
            href="{{ route('aprendice.create') }}"
            class="aprendice-btn-primary"
        >

            <i class="bi bi-plus-circle"></i>

            Nuevo estudiante

        </a>

    </div>


    <!-- TABLA -->

    <div class="aprendice-card">

        <div class="table-responsive">

            <table
                id="idProduct"
                class="table aprendice-table"
            >

                <thead>

                    <tr>

                        <th>Nombre</th>

                        <th>Email</th>

                        <th>Número celular</th>

                        

                        <th></th>

                    </tr>

                </thead>


                <tbody>

                    @foreach ($aprendices as $aprendice)

                    <tr>

                        <td>
                            {{ $aprendice->name }}
                        </td>


                        <td>
                            {{ $aprendice->email }}
                        </td>


                        <td>
                            {{ $aprendice->cell_number }}
                        </td>




                       <td>

    <div class="aprendice-actions">

        <!-- MOSTRAR -->

        <a
            href="{{ route('aprendice.show', $aprendice->id) }}"
            class="aprendice-btn btn-mostrar"
        >

            <i class="bi bi-eye"></i>
            Mostrar

        </a>


        <!-- EDITAR -->

        <a
            href="{{ route('aprendice.edit', $aprendice->id) }}"
            class="aprendice-btn btn-editar"
        >

            <i class="bi bi-pencil"></i>
            Editar

        </a>


        <!-- ELIMINAR -->

        <form
            action="{{ route('aprendice.destroy', $aprendice->id) }}"
            method="POST"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="aprendice-btn btn-eliminar"
                onclick="return confirm('¿Está seguro de eliminar este aprendiz?')"
            >

                <i class="bi bi-trash"></i>
                Eliminar

            </button>

        </form>

    </div>

</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection