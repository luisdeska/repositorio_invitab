<!doctype html>
<html lang="es">
    <head>
        <title>{{$titulo}}</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    

    <body>
        <nav class="navbar navbar-custom fixed-top">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">
                    <h2><img src="{{ asset('/img/logo-ivt2.png') }}" alt="Logo" style="width: 60px;"> Invitab</h2>
                </span>
            
            <div class="d-flex">
                
                <a class="navbar-brand mx-4" style="font-size: 1.5rem;" href="/index">
                    <h2><i class="bi bi-house-fill"></i> Inicio</h2>
                </a>
            
                <div class="d-flex">
                    <a class="navbar-brand mx-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                    </a>
                </div>
            </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Opciones</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="list-group">
                    <a role="button" href="/perfil" class="list-group-item list-group-item-action btn-brown">Ver perfil</a>
                    <a role="button" href="/cargar" class="list-group-item list-group-item-action btn-brown">Agregar documento</a>
                    <a role="button" href="/cerrarSession" class="list-group-item list-group-item-action btn-brown">Cerrar sesión</a>
                </div>
            </div>
        </div>

@yield('body')
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
