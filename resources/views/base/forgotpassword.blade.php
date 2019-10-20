<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            .m-b-md {
                margin-bottom: 30px;
            }


            .links {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .nav > a {
                color: #636b6f;
                padding: 0 25px;
                font-size:25px;
                font-weight: 800;
                letter-spacing: .1rem;
                text-decoration: none;
                float:right;
            }

        </style>
    </head>
    <body>

        <div class='nav'>
                <a href="{{ action('Controlador@Home') }}">Home</a>
                <a href="{{ action('Controlador@Login') }}">Login</a>
        </div>
        <br>

    <div class="content">
    <br>
                <div class="login">
                    <div class='title'>
                        Recuperar Contraseña
                    </div>
                    <form action="recuperarContrasena" method="post">
                        @csrf
                        Correo<br>
                        <input type="email" id="correo" name="correo" required>
                        <br><br>

                        <input class="btn btn-dark" type="submit" value="Enviar Solicitud">
                        <br><br>
                    
                   </form>

                </div>
</div>
            </div>
        </div>
    </body>
</html>
