<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Webgecol</title>
        <!--<link rel="stylesheet" href="/Colegios/site_media/css/normalize.css">
        <link rel="stylesheet" href="/Colegios/site_media/css/Estilo.css">-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="{{asset('js/pag.js')}}"></script>
    </head>
    <body>
        <div class="agrupar">
            <div class="cabecera_cont">
                <header id="cabecera" class="cabecera">
                    <div id="logo"><img src="/Colegios/site_media/images/Logo.png" width="130" height="90"></div>
                    <div class="titulo-principal"><br>Webgecol</div>
                </header>
            </div>
            <nav id="menu" class="menu">
                <ul id="opciones">
                    <li><a href="/Colegios/{VIEW_HOME_ADMIN}">Principal</a></li>
                    <li><a href="/Colegios/{VIEW_SET_ES}">Matricular</a></li>
                </ul>
            </nav>
            <div class="s-line"></div>
            <div class="seccion_cont">
                <section id="seccion" class="seccion">
                    <div class="form-content">
                        {formulario}
                    </div>
                </section>
                <footer class="pie">
                    <div class="s-line"></div>
                    <br>
                    Gestion de Colegios En la Web.
                    <br>Derechos Reservados &copy;
                </footer>
            </div>
        </div>
    </body>
</html>
