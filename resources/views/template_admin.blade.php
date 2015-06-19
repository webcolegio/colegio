<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset ('css/main.css')}}">
        <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
        <script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
        <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/pag.js')}}"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!--<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <title>WebColegios</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">            
                        <img src="/Colegios/site_media/images/Logo.png">
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-custom" role="navigation" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar white"></span>
                    <span class="icon-bar white"></span>
                    <span class="icon-bar white"></span>
                </button>
                <a href="#" class="navbar-brand texto white">WebColegios</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/Colegios/{FORM_ADD_COLEGIO}" class="white">Agregar Instituciones</a></li>
                    <li><a href="/Colegios/{FORM_ADD_USER_COOR}" class="white">Administradores</a></li>
                    <li>
                        <a href="/Colegios/principal/logout/" class="white">
                            <i></i>
                            <span class="texto">Cerrar Sesion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>   
        <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <div class="container"> 
                        {contenido}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <h5>Gestion de Colegios En la Web. Derechos Reservados &copy;</h5>         
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>