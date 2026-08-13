<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AdminSena222</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"

    
    >
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >


    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    >

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg mi-navbar">

        <div class="container">

            <a
                class="navbar-brand text-white fw-bold"
                href="{{ route('home') }}"
            >
                SENA
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarNav"
            >

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('home') }}"
                        >
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('aprendice.index') }}"
                        >
                            Aprendices
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('area.index') }}"
                        >
                            Áreas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('computer.index') }}"
                        >
                            Computadores
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('course.index') }}"
                        >
                            Cursos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('teacher.index') }}"
                        >
                            Profesores
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link text-white"
                            href="{{ route('training_center.index') }}"
                        >
                            Centros
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- CONTENIDO DE CADA PÁGINA -->

    @yield('content')


    <!-- FOOTER -->

    <footer class="mi-footer text-white text-center py-4 mt-5">

        <h5>SENA Admin</h5>

        <p class="mb-1">
            Sistema de Gestión
        </p>

        <p class="mb-0">
            © 2026 - Proyecto ADSO
        </p>

    </footer>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
        
    </script>

</body>

</html>