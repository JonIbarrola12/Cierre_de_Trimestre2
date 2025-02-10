<html>
    <head>
        <title>
            Jon Ibarrola Pulido
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="index">
            <header id="header">
                <h1>Currículum</h1>
            </header>
            <div id="nombre">
                <p>
                    Jon Ibarrola Pulido
                </p>
            </div>
            <div id="fechayhora">
                <p>
                <?php
                    date_default_timezone_set("Europe/Madrid"); 
                    $fecha_actual = date("d/m/Y");
                    $hora_actual = date("H:i:s");
                    echo $fecha_actual . " " . $hora_actual; 
                ?>
                <script>
                    function actualizarFechaHora() {
                        let ahora = new Date();
                        let dia = ahora.getDate().toString().padStart(2, '0');
                        let mes = (ahora.getMonth() + 1).toString().padStart(2, '0'); 
                        let año = ahora.getFullYear();

                        let horas = ahora.getHours().toString().padStart(2, '0');
                        let minutos = ahora.getMinutes().toString().padStart(2, '0');
                        let segundos = ahora.getSeconds().toString().padStart(2, '0');

                        document.getElementById("fecha_hora").innerText = "Fecha: " + dia + "/" + mes + "/" + año + " - Hora: " + horas + ":" + minutos + ":" + segundos;
                    }

                    setInterval(actualizarFechaHora, 1000);
                </script>
                </p>
            </div>
            <hr class="lineanegra">
            <div class="navegador">
                <ul>
                    <li>
                        <a href="experiencia.html">Experiencia laboral</a>
                    </li>
                    <li>
                        <a href="estudios.html">Estudios</a>
                    </li>
                    <li>
                        <a href="memes.html">Memes</a>
                    </li>
                    <li>
                        <a href="peliculas.html">Películas</a>
                    </li>
                </ul>
            </div>
            <hr class="lineanegra">
            <div class="titulos">
                <p class="titulo">
                    SOBRE MI
                </p>
            </div>
            <div id="info">
                <div class="datos">
                    <p>
                        <span class="parte">Fecha de nacimiento: </span>21/04/2006<br>
                        <span class="parte">Direccion: </span>c/Miguel de Unamuno nº13<br>
                        <span class="parte">Municipio: </span>Portugalete<br>
                        <span class="parte">Nacionalidad: </span>Español<br>
                        <span class="parte">Carnet de Conducir: </span>No
                    </p>
                </div>
                <div class="datos">
                    <p>
                        <span class="parte">Hobbies: </span>Musica y Videojuegos<br>
                        <span class="parte">Extras: </span>Se tocar la guitarra
                    </p>
                </div>
                <div class="datos">
                    <p>
                        <a class="links" href="https://github.com/JonIbarrola12" target="_blank">Perfil de Github</a><br>
                        <a class="links" target="_blank" href="videos/VID-20230521-WA0009.mp4">Video de mi Grupo</a>
                    </p>                
                </div>
            </div>
            <footer>
                <br>
                <p>
                <span class="datosfooter">Teléfono: </span>643984657<br>
                <br>
                <br>
                <span class="datosfooter">Correo Electrónico: </span>jon.ibarrola06@somo.eus
                <div class="linksfooter">
                <a class="links" href="href="#" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&to=jon.ibarrola06@somo.eus&su=Asunto&body=Escribe%20aquí%20tu%20mensaje.', '_blank'); return false;"" target="_blank"><img class="imgfooter" src="https://static.vecteezy.com/system/resources/previews/017/396/757/non_2x/google-mail-icons-free-png.png" alt="GMAIL"/></a>
                <a class="links" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img class="imgfooter" src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt="Youtube"/></a>
                <a class="links" href="https://www.somorrostro.com/" target="_blank"><img class="imgfooter" src="https://moodle.somorrostro.com/file.php/1/logo_somo.jpg" alt="somorrostrofp"/></a>
                </div>
                </p>
            </footer>
        </div>
    </body>
</html>