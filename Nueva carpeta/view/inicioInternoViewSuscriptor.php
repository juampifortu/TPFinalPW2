

<html>
<head></head>
<body>
<div align="center">
<h2>Bienvenido Suscriptor</h2>


    
<h3>¿Que puedo hacer actualmente?</h3>
<br>
    <h2 class="w3-wide">Noticias</h2>
    <table class="w3-table">
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Contenido</th>
            <th>Imagen</th>
        </tr>

        <?php
        foreach ($noticias as $noticia) {
            echo "<tr>
                      <td>" . $noticia['id_noticia'] . "</td>
                      <td>" . $noticia['titulo'] . "</td>
                      <td>" . $noticia['cuerpo'] . "</td>
                 </tr>";
            echo '<img src="'.$noticia['url_imagen'].'" width=200 " >';
        }



        ?>
    </table>
</div>
</body>
</html>


