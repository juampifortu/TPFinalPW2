<html>
<script>
    function optionChange(sel){
        if(sel.value==1){
            tab1 = document.getElementById("diarios");
            tab1.style.display="";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==2){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==3){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="";

            tab2 = document.getElementById("noticias");
            tab2.style.display="none";
        }else if(sel.value==4){
            tab1 = document.getElementById("diarios");
            tab1.style.display="none";

            tab2 = document.getElementById("ediciones");
            tab2.style.display="none";

            tab2 = document.getElementById("secciones");
            tab2.style.display="none";

            tab2 = document.getElementById("noticias");
            tab2.style.display="";
        }
    }
</script>
<head></head>
<body>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Publicaciones Pendientes</h2>

    <select name="tipo" id="twek" onchange="optionChange(this)">
        <option value="1">Diarios</option>
        <option value="2">Ediciones</option>
        <option value="3">Secciones</option>
        <option value="4">Noticias</option>
    </select>
    
    <table class="w3-table" id="diarios" style="display: ;">
        <tr>
            <th>id</th>
            <th>Título</th>
        </tr>

        <?php
        foreach ($diarios as $diario) {
            $id=$diario['id_diario'];
            echo "<tr>
                      <td>" . $diario['id_diario'] . "</td>
                      <td>" . $diario['nombre'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=0'>Aprobar</a></td> 
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1'>Eliminar</a></td>          
                 </tr>";
        }
        ?>
    </table>

    <table class="w3-table" id="ediciones" style="display: none;">
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>

        <?php
        foreach ($ediciones as $edicion) {
            $id=$edicion['id_edicion'];
            echo "<tr>
                      <td>" . $edicion['id_edicion'] . "</td>
                      <td>" . $edicion['descripcion'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=2'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1'>Eliminar</a></td>  
                  </tr>";
        }
        ?>
    </table>
    <table class="w3-table" id="secciones" style="display: none;">
        <tr>
            <th>id</th>
            <th>Nombre</th>
        </tr>

        <?php
        foreach ($secciones as $seccion) {
            $id=$seccion['id_seccion'];
            echo "<tr>
                      <td>" . $seccion['id_seccion'] . "</td>
                      <td>" . $seccion['nombre'] . "</td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=3'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion.php?id=$id&tipo=1&el=1'>Eliminar</a></td>
                 </tr>";
        }
        ?>
    </table>

    <table class="w3-table" id="noticias" style="display: none;">
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Contenido</th>
        </tr>

        <?php
        foreach ($noticias as $noticia) {
            $id=$noticia['id_noticia'];
            echo "<tr>
                      <td>" . $noticia['id_noticia'] . "</td>
                      <td>" . $noticia['titulo'] . "</td>
                      <td>" . $noticia['cuerpo'] . "</td>
                      <td><img src=" .$noticia['url_imagen'] ." width=200 height=120 ></td>
                      <td><a href='../model/aprobarPublicacion?id=$id&tipo=4'>Aprobar</a></td>
                      <td><a href='../model/aprobarPublicacion?id=$id&tipo=1&el=1'>Eliminar</a></td>     
                 </tr>";
        }
        ?>
    </table>

</div>
</body>
</html>

