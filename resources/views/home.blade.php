@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="display-4 fw-bold">
            Bienvenido a AdminSena222
        </h1>

        <p class="lead">
            Sistema de gestión del SENA
        </p>

    </div>


    <div class="row g-4">


        <!-- APRENDICES -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <i class="bi bi-backpack"></i>

                    <p>
                        Gestiona los aprendices registrados.
                    </p>

                    <a href="{{ route('aprendice.index') }}" class="mi-boton">
                        Ver aprendices
                    </a>

                </div>

            </div>

        </div>


        <!-- ÁREAS -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>
                        🏢 Áreas
                    </h3>

                    <p>
                        Administra las áreas del sistema.
                    </p>

                    <a href="{{ route('area.index') }}" class="mi-boton">
                        Ver áreas
                     </a>

                </div>

            </div>

        </div>


        <!-- COMPUTADORES -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>
                        💻 Computadores
                    </h3>

                    <p>
                        Gestiona los computadores.
                    </p>

                    <a href="{{ route('computer.index') }}" class="mi-boton">
                        Ver computadores
                    </a>

                </div>

            </div>

        </div>


        <!-- CURSOS -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>
                         Cursos
                    </h3>

                    <p>
                        Administra los cursos.
                    </p>

                    <a href="{{ route('course.index') }}" class="mi-boton">
                     Ver cursos
                    </a>

                </div>

            </div>

        </div>


        <!-- PROFESORES -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>
                        👨‍🏫 Profesores
                    </h3>

                    <p>
                        Gestiona los profesores.
                    </p>

                    <a href="{{ route('teacher.index') }}" class="mi-boton">
                         Ver profesores
                    </a>

                </div>

            </div>

        </div>


        <!-- CENTROS -->

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>
                        🏫 Centros de formación
                    </h3>

                    <p>
                        Gestiona los centros de formación.
                    </p>

                    <a href="{{ route('training_center.index') }}" class="mi-boton">
                        Ver centros
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection