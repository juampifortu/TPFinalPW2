<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Noticias Pendientes</h2>
    <table class="w3-table">
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Contenido</th>
        </tr>

        <?php
        foreach ($noticias as $noticia) {
            echo "<tr>
                      <td>" . $noticia['id_noticia'] . "</td>
                      <td>" . $noticia['titulo'] . "</td>
                      <td>" . $noticia['cuerpo'] . "</td>
                 </tr>";
        }
        ?>
    </table>

    <form action="./model/aprobarNoticia.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="noti">Seleccionar id de la noticia</label>
        <select name='id' id='noti'>
            <?php
                 foreach ($noticias as $noticia) {
                 echo "<option value='" . $noticia['id_noticia'] . "'>" . $noticia['id_noticia'] . "</option>";
                 }
            ?>
        </select>
        <input type="submit" value="Aprobar">
    </form>
</div>
