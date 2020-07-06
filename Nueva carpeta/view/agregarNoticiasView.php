<html>
<head>
    <script>
        var opcionesCargadas = JSON.parse('<?php echo json_encode($opciones); ?>');

        function getDiarios(opciones) {
            var retorno = {};
            opciones.forEach((option) => {
                if (!retorno[option.id_diario]) {
                    retorno[option.id_diario] = option.diario_nombre;
                }
            });
            return retorno;
        }

        function addOptionsDiarios(diarios) {
            var selectdiarios = document.getElementById("diario");
            Object.keys(diarios).forEach((id) => {
                selectdiarios.add(new Option(diarios[id], id, false, false));
            });
            if (selectdiarios[0]) selectdiarios[0].selected = true;
        }

        function getEdiciones(opciones) {
            var id_diario_seleccionado = document.getElementById("diario").value;
            var retorno = {};
            opciones.forEach((option) => {
                if (!retorno[option.id_edicion] && option.id_diario == id_diario_seleccionado) {
                    retorno[option.id_edicion] = option.descripcion;
                }
            });
            return retorno;
        }

        function addOptionsEdiciones(ediciones) {
            var selectEdiciones = document.getElementById("edi");
            while (selectEdiciones.length >= 1) {
                selectEdiciones.remove(0);
            }
            Object.keys(ediciones).forEach((id) => {
                selectEdiciones.add(new Option(ediciones[id], id, false, false));
            });
            if (selectEdiciones[0]) selectEdiciones[0].selected = true;
        }

        function getSecciones(opciones) {
            var id_diario_seleccionado = document.getElementById("diario").value;
            var id_edicion_seleccionada = document.getElementById("edi").value;
            var retorno = {};
            opciones.forEach((option) => {
                if (!retorno[option.id_seccion] && option.id_diario == id_diario_seleccionado
                    && option.id_edicion == id_edicion_seleccionada) {
                    retorno[option.id_seccion] = option.seccion_nombre;
                }
            });
            return retorno;
        }

        function addOptionsSecciones(ediciones) {
            var selectSecciones = document.getElementById("sec");
            while (selectSecciones.length >= 1) {
                selectSecciones.remove(0);
            }
            Object.keys(ediciones).forEach((id) => {
                selectSecciones.add(new Option(ediciones[id], id, false, false));
            });
            if (selectSecciones[0]) selectSecciones[0].selected = true;
        }

        function updateDiarios() {
            addOptionsDiarios(getDiarios(opcionesCargadas));
            updateEdiciones();
        }

        function updateEdiciones() {
            addOptionsEdiciones(getEdiciones(opcionesCargadas));
            updateSecciones();
        }

        function updateSecciones() {
            addOptionsSecciones(getSecciones(opcionesCargadas));
        }

    </script>
</head>
<body onload="updateDiarios()">
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <br>
    <h2>Agregar Noticia</h2>

    <form action="./model/guardarpublicacion.php" method="POST" enctype="multipart/form-data">
        <label for="tipo">Tipo de publicación:</label>
        <select name="tipo">
            <option value="4">Noticia</option>
        </select>
        <br>
        <label for="diario">Seleccionar el diario</label>
        <select name='id_diario' id='diario' onchange="updateEdiciones()">
        </select><br>
        <label for="edi">Seleccionar id de la edición</label>
        <select name='id_edicion' id='edi' onchange="updateSecciones()">
        </select><br>
        <label for="sec">Seleccionar id de la sección</label>
        <select name='id_seccion' id='sec'>
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

