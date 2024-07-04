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
        <link rel="stylesheet" href="{{asset('/css/navbar.css')}}">
    </head>
    

    <body>
        <nav class="navbar navbar-custom fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand mb-0">
                    <h2> Invitab</h2>
                </div>
            
            </div>
        </nav>


        <div class="text-center row align-items-center justify-content-center vh-100 container-fluid">
            
        <form action="{{route('registro')}}" method="POST">
            @csrf
            <img src="{{ asset('/img/logo-ivt2.png') }}" alt="Logo" style="width:20%; height:20%;">
                <div>
                    <h1>Registrar nuevo usuario</h1>
                    <h5 class="mt-4">Ingresa los datos del usuario nuevo</h5>
                </div>
            <div>  
                <label for="email" class="form-label p-1">Usuario</label>
                <div><input class="form-control-sm" type="text" name="user" id="user" required></div>
            </div>
            <div>  
                <label for="email" class="form-label p-1">Nombre</label>
                <div><input class="form-control-sm" type="text" name="nombre" id="nombre" required></div>
            </div>
            <div>  
                <label for="email" class="form-label p-1">Apellido</label>
                <div><input class="form-control-sm" type="text" name="apellido" id="apellido" required></div>
            </div>
            <div>
                <label for="pass" id="lbl" class="form-label p-1">Contraseña</label>
                <div><input class="form-control-sm" type="password" name="password" id="password" required></div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-outline-dark">Guardar</button>
            </div>
            
        </form>

        </div>


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