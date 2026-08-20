@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="contacto-header text-center mb-5">

        <h1>Contacto</h1>

        <p>
            ¿Tienes alguna pregunta? Puedes comunicarte con nosotros
            a través de los siguientes medios.
        </p>

    </div>


    <div class="row justify-content-center g-4">

        <!-- INFORMACIÓN -->
        <div class="col-md-5">

            <div class="contacto-card">

                <h3>Información de contacto</h3>

                <div class="contacto-dato">

                    <i class="bi bi-geo-alt-fill"></i>

                    <div>
                        <strong>Ubicación</strong>
                        <p>Centro de Formación SENA</p>
                    </div>

                </div>


                <div class="contacto-dato">

                    <i class="bi bi-telephone-fill"></i>

                    <div>
                        <strong>Teléfono</strong>
                        <p>+57 601 546 1500</p>
                    </div>

                </div>


                <div class="contacto-dato">

                    <i class="bi bi-envelope-fill"></i>

                    <div>
                        <strong>Correo</strong>
                        <p>contacto@adminSena.com</p>
                    </div>

                </div>


                <div class="contacto-dato">

                    <i class="bi bi-clock-fill"></i>

                    <div>
                        <strong>Horario</strong>
                        <p>Lunes a viernes de 8:00 AM a 5:00 PM</p>
                    </div>

                </div>

            </div>

        </div>


        <!-- FORMULARIO -->
        <div class="col-md-7">

            <div class="contacto-card">

                <h3>Envíanos un mensaje</h3>

                <form>

                    <div class="mb-3">

                        <label class="form-label">
                            Nombre
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Escribe tu nombre"
                        >

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="correo@ejemplo.com"
                        >

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Mensaje
                        </label>

                        <textarea
                            class="form-control"
                            rows="5"
                            placeholder="Escribe tu mensaje"
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-contacto"
                    >
                        <i class="bi bi-send-fill"></i>
                        Enviar mensaje
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection