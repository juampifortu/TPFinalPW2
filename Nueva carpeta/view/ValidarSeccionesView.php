<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Secciones Pendientes</h2>
    <table class="w3-table">
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>

        <?php
        foreach ($secciones as $seccion) {
            echo "<tr>
                      <td>" . $seccion['id_seccion'] . "</td>
                      <td>" . $seccion['nombre'] . "</td>
                 </tr>";
        }
        ?>
    </table>

    <form action="./model/aprobarSeccion.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="noti">Seleccionar id de la sección</label>
        <select name='id' id='noti'>
            <?php
                 foreach ($secciones as $seccion) {
                 echo "<option value='" . $seccion['id_seccion'] . "'>" . $seccion['id_seccion'] . "</option>";
                 }
            ?>
        </select>
        <input type="submit" value="Aprobar">
    </form>
</div>
