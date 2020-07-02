<html>
<head></head>
<body>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <br>
<h2>Agregar Noticia</h2>

<form action="../model/guardarpublicacion.php" method="POST" enctype="multipart/form-data">
    <label for="tipo">Tipo de publicación:</label>
    <select name="tipo">
        <option value="4">Noticia</option>
    </select>
    <br>
    <label for="diario">Seleccionar id del diario</label>
    <select name='id_diario' id='diario'>
        <?php
        foreach ($diarios as $diario) {
            echo "<option value='" . $diario['id_diario'] . "'>" . $diario['nombre'] . "</option>";
        }
        ?>
    </select><br>
    <label for="edi">Seleccionar id de la edición</label>
    <select name='id_edicion' id='edi'>
        <?php
        foreach ($ediciones as $edicion) {
            echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['descripcion'] . "</option>";
        }
        ?>
    </select><br>
    <label for="sec">Seleccionar id de la sección</label>
    <select name='id_seccion' id='sec'>
        <?php
        foreach ($secciones as $seccion) {
            echo "<option value='" . $seccion['id_seccion'] . "'>" . $seccion['nombre'] . "</option>";
        }
        ?>
    </select><br>
    <input type="text" name="titulo" placeholder="Ingrese un título" size="49" required><br/>
    <textarea name="cuerpo" placeholder="Ingrese un cuerpo" rows="10" cols="50" required></textarea><br/>
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen"><br>
    <input type="submit" value="Publicar">
</form>
</div>
</body>
</html>

