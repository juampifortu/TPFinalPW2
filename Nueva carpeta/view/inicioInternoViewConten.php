<html>
<head></head>
<body>
<div align="center">
<h2>Bienvenido Contenidista</h2>

<h3>¿Que puedo hacer actualmente?</h3>
<br>
<a href="indexInterno.php?page=agregarNoticias">Agregar noticias</a>
<br>
<a href="indexInterno.php?page=agregarPublicacion">Agregar diario/seccion/edicion</a><br>

    <h3 class="w3-wide">Noticias Recientes</h3>

    <div class=\"w3-row-padding w3-auto\">
    <?php
    foreach ($noticias as $noticia){
        $id=$noticia['id_noticia'];
        echo "
        <a href='indexInterno.php?page=noticia&id=$id'>
        <div class='w3-third'>
            <p>" . strtoupper($noticia['titulo']) . "</p>"
            . "<img src=" .$noticia['url_imagen'] ." width=200 height=120 >".
            "</div>  
        </a>
        ";
    }
    ?>
</div>

</div>

</body>
</html>


