<html>
<script>
    function opcionChange(sel){
        if(sel.value==2){
            divC = document.getElementById("diarios");
            divC.style.display="";

            divT= document.getElementById("ediciones");
            divT.style.display="none";
        }else if (sel.value==3){
            divC = document.getElementById("diarios");
            divC.style.display="";

            divT= document.getElementById("ediciones");
            divT.style.display="";
        }else if(sel.value==1){
            divC = document.getElementById("diarios");
            divC.style.display="none";

            divT= document.getElementById("ediciones");
            divT.style.display="none";
        }
    }
</script>
<head>
</head>
<body>
<div align="center">
    <br>
Nueva Publicación

<form action="./model/guardarPublicacion.php" method="POST" enctype="application/x-www-form-urlencoded">
    <br>
    <input type="text" name="titulo" placeholder="Ingrese el título" size="49" required><br/>
    <select name="tipo" id="twek" onchange="opcionChange(this)">
        <option value="1">Diario</option>
        <option value="2">Edición</option>
        <option value="3">Sección</option>
    </select><br>
    <div id="diarios" style="display: none;" >
        <select name='id_diario' id='id_diario'>
            <?php
            foreach ($diarios as $diario) {
                echo "<option value='" . $diario['id_diario'] . "'>" . $diario['nombre'] . "</option>";
            }
            ?>
        </select>
    </div>

    <div id="ediciones" style="display: none;">
        <select name='id_edicion' id='id_edicion'>
            <?php
            foreach ($ediciones as $edicion) {
                echo "<option value='" . $edicion['id_edicion'] . "'>" . $edicion['descripcion'] . "</option>";
            }
            ?>
        </select>
    </div>

    <input type="submit" value="Enviar">
</form>
</div>
</body>
</html>

