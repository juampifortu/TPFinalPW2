<html>
<head></head>
<body>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <br>
<h2>Agregar Noticia</h2>
    <h4>Diarios disponibles</h4>
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
    <h4>Secciones disponibles</h4>
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
    <h4>Ediciones disponibles</h4>
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



<form action="./model/guardarNoticia.php" method="POST" enctype="application/x-www-form-urlencoded">
    <br>
    <label for="diario">Seleccionar id del diario</label>
    <select name='id_diario' id='diario'>
        <?php
        foreach ($diarios as $diario) {
            echo "<option value='" . $diario['id_diario'] . "'>" . $diario['id_diario'] . "</option>";
        }
        ?>
    </select><br>
    <label for="edi">Seleccionar id de la edición</label>
    <select name='id_edicion' id='edi'>
        <?php
        foreach ($ediciones as $edicion) {
            echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['id_edicion'] . "</option>";
        }
        ?>
    </select><br>
    <label for="sec">Seleccionar id de la sección</label>
    <select name='id_seccion' id='sec'>
        <?php
        foreach ($secciones as $seccion) {
            echo "<option value='" . $seccion['id_seccion'] . "'>" . $seccion['id_seccion'] . "</option>";
        }
        ?>
    </select><br>
    <input type="text" name="titulo" placeholder="Ingrese un título" size="49" required><br/>
    <textarea name="cuerpo" placeholder="Ingrese un cuerpo" rows="10" cols="50" required></textarea><br/>
    <input type="submit" value="Publicar">
</form>
</div>
</body>
</html>

