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

</head>

<body>

    <nav class="navbar navbar-dark bg-success">

        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                AdminSena222
            </a>

        </div>

    </nav>


    <div class="container mt-4">

        <h1>
            Dashboard
        </h1>

        <div class="row mt-4">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h5 class="card-title">
                            Aprendices
                        </h5>

                        <p class="card-text">
                            Gestionar aprendices.
                        </p>

                        <a
                            href="{{ route('aprendice.list') }}"
                            class="btn btn-success"
                        >
                            Ver aprendices
                        </a>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h5 class="card-title">
                            Cursos
                        </h5>

                        <p class="card-text">
                            Gestionar cursos.
                        </p>

                        <a
                            href="{{ route('course.list') }}"
                            class="btn btn-success"
                        >
                            Ver cursos
                        </a>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h5 class="card-title">
                            Áreas
                        </h5>

                        <p class="card-text">
                            Gestionar áreas.
                        </p>

                        <a
                            href="{{ route('area.list') }}"
                            class="btn btn-success"
                        >
                            Ver áreas
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>