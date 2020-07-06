

<html>
<head>

</head>
<body>

<div class="w3-container w3-content w3-center w3-padding-64" >
    <h2 class="w3-wide">Bienvenido Suscriptor</h2>

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


