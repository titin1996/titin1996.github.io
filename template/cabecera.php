<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>sitio web </title>
    <!-- Archivo CSS de Bootstrap 4 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necesario para el funcionamiento de Bootstrap 4) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Archivo JavaScript de Bootstrap 4 (que incluye Popper.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/f53ee56500.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <head>
        <link rel="stylesheet" href="./css/bootstrap.css">
    </head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary" style="font-size: 1.2rem; padding: 7px;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Logo" width="40" height="40">
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inventario</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="inventario.php">Cantidad</a>
                        <a class="dropdown-item" href="ingresoyeliminacion.php">Ingreso y Elimincación</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registro</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="registroesterilizacion.php">Esterilización</a>
                        <a class="dropdown-item" href="registrobowiedick.php">Bowie Dick</a>
                        <a class="dropdown-item" href="cronometro.php">Cronometro de Esterilización</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Entrega Diaria</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-submenu dropdown-menu-right"> <!-- Añade la clase dropdown-menu-right -->
                            <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movimiento</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="movimientoprocedimiento.php">procedimiento</a>
                                <a class="dropdown-item" href="movimientopodologia.php">Podología</a>
                                <a class="dropdown-item" href="movimientocirugiamenor.php">Cirugía Menor</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="movimientodentalA.php">Dental A</a>
                                <a class="dropdown-item" href="movimientodentalB.php">Dental B</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="movimientomatronaA.php">Matrona A</a>
                                <a class="dropdown-item" href="movimientomatronaB.php">Matrona B</a>
                                <!-- Agrega más subopciones según sea necesario -->
                            </div>
                        </div>
                        <div class="dropdown-submenu dropdown-menu-right"> <!-- Añade la clase dropdown-menu-right -->
                            <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Historial</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="historialprocedimiento.php">procedimiento</a>
                                <a class="dropdown-item" href="historialpodologia.php">Podología</a>
                                <a class="dropdown-item" href="historialcirugiamenor.php">Cirugía Menor</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="historialdentalA.php">Dental A</a>
                                <a class="dropdown-item" href="historialdentalB.php">Dental B</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="historialmatronaA.php">Matrona A</a>
                                <a class="dropdown-item" href="historialmatronaB.php">Matrona B</a>
                                <!-- Agrega más subopciones según sea necesario -->
                            </div>
                        </div>
                    </div>
                </li>
            

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Varios</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="bitacora.php">Bitacora</a>
                        <div class="dropdown-divider"></div> <!-- Divisor -->

                        <div class="dropdown-submenu dropdown-menu-right"> <!-- Añade la clase dropdown-menu-right -->
                            <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Aprendizaje</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="matrona.php">matronas</a>
                                <a class="dropdown-item" href="procedimiento.php">procedimiento</a>
                                <a class="dropdown-item" href="podologia.php">Podología</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dentala.php">Dental A</a>
                                <a class="dropdown-item" href="dentalb.php">Dental B</a>
                                <!-- Agrega más subopciones según sea necesario -->
                            </div>
                        </div>
                </li>
                <script src="js/submenu1.js"></script>

            </ul>
            <div class="ml-auto encargado-container">
                <p class="m-0 text-white font-weight-bold encargado-text">Encargada de esterilización : Marian Hasse</p>
                <p class="m-0 text-white font-weight-bold encargado-text">TENS de esterilazión: Salome Tureuna</p>
            </div>
        </div>
    </nav>
    <div class="mi-contenedor">
        </br></br>
        <div class="row">