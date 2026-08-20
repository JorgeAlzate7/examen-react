@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center g-4">

        <!-- VISIÓN -->
        <div class="col-md-6">

            <div class="vision-mision-card">

                <div class="icono-vm">
                    <i class="bi bi-eye"></i>
                </div>

                <h2>Visión</h2>

                <p>
                    Nuestra visión es seguir mejorando el sistema para convertirlo
                    en una herramienta completa y útil para la gestión del SENA,
                    incorporando nuevas funciones que permitan administrar la
                    información de manera más organizada, segura y accesible.
                </p>

            </div>

        </div>


        <!-- MISIÓN -->
        <div class="col-md-6">

            <div class="vision-mision-card">

                <div class="icono-vm">
                    <i class="bi bi-bullseye"></i>
                </div>

                <h2>Misión</h2>

                <p>
                    Nuestra misión es brindar una herramienta sencilla, organizada
                    y fácil de utilizar que permita gestionar la información del
                    SENA de una manera rápida y eficiente, facilitando el trabajo
                    de los usuarios y mejorando la organización de los datos.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection