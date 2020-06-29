<html>
<head></head>
<body>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <br>
<h3>Agregar Edición</h3>

    <table class="w3-table">
        <tr>
            <th>id</th>
            <th>Título</th>
        </tr>

        <?php
        foreach ($diarios as $diario) {
            echo "<tr>
                      <td>" . $diario['id_diario'] . "</td>
                      <td>" . $diario['nombre'] . "</td>           
                 </tr>";
        }
        ?>
    </table>

<form action="./model/guardarEdicion.php" method="POST" enctype="application/x-www-form-urlencoded">
    <br>
    <label for="noti">Seleccionar id del diario</label>
    <select name='id' id='noti'>
        <?php
        foreach ($diarios as $diario) {
            echo "<option value='" . $diario['id_diario'] . "'>" . $diario['id_diario'] . "</option>";
        }
        ?>
    </select><br>
    <input type="text" name="titulo" placeholder="Ingrese el nombre de la edición" size="49" required><br/>
    <input type="submit" value="Publicar">
</form>
</div>
</body>
</html>

