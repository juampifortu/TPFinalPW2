<html>
<head></head>
<body>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <br>
<h3>Agregar Sección</h3>

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

<form action="./model/guardarSeccion.php" method="POST" enctype="application/x-www-form-urlencoded">
    <br>
    <label for="noti">Seleccionar id de la edición</label>
    <select name='id' id='noti'>
        <?php
        foreach ($ediciones as $edicion) {
            echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['id_edicion'] . "</option>";
        }
        ?>
    </select><br>
    <input type="text" name="titulo" placeholder="Ingrese el nombre de la sección" size="49" required><br/>
    <input type="submit" value="Publicar">
</form>
</div>
</body>
</html>

