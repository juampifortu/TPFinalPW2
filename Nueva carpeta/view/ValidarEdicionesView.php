<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Ediciones Pendientes</h2>
    <table class="w3-table">
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>

        <?php
        foreach ($ediciones as $edicion) {
            echo "<tr>
                      <td>" . $edicion['id_edicion'] . "</td>
                      <td>" . $edicion['descripcion'] . "</td>
                  </tr>";
        }
        ?>
    </table>

    <form action="./model/aprobarEdicion.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="noti">Seleccionar id de la edición</label>
        <select name='id' id='noti'>
            <?php
                 foreach ($ediciones as $edicion) {
                 echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['id_edicion'] . "</option>";
                 }
            ?>
        </select>
        <input type="submit" value="Aprobar">
    </form>
</div>
