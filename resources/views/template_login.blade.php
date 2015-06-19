<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset ('css/main.css')}}">
        <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
        <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asser('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/pag.js')}}"></script>
        <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="{{'asset(css/bootstrap.min.css')}}">
        <!--<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <title>WebColegios</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">            
                        <img src="/Colegios/site_media/images/Logo.png"  height="88" width="108">
                    </div>
                    <div class="hidden-xs col-lg-4 col-md-4 col-sm-4">
                        <div class="container">
                            <div class="row"></div>
                            <div class="container">
                                <div class="row">
                                    <img src="/Colegios/site_media/images/mineducacion.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-custom" role="navigation" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <i class="fa fa-bars white"></i>
                </button>
                <a href="#" class="navbar-brand texto white">WebColegios</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/Colegios/{HOME_LOG}" class="white">
                            <i class="fa fa-home"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="/Colegios/{QUIENES_SOMOS}" class="white">
                            <i class="fa fa-question"></i>
                            Quienes Somos
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" action="/Colegios/{LOGIN}" method="post">
                    <div class="form-group" >    
                        <input type="text" name="username" class="form-control" placeholder="Usuario" required>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-sign-in"></i>
                            Iniciar Sesion
                        </button>
                    </div>
                </form>
            </div>
        </nav>   
        <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                {contenido}
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <footer>
                    <h4 class="white">Universidad de Cordoba - Ingenieria de sistemas</h4>     
                </footer>
            </div>
        </div>
    </body>
</html>