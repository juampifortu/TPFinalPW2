<html>
<head></head>
<body>
<div align="center">
    <br>
    <h2 class="w3-wide">Usuarios</h2>
    <table class="w3-table">
        <tr>
            <th>nombre</th>
            <th>categoria</th>
        </tr>

        <?php
        foreach ($usuarios as $usuario) {
            $id=$usuario['id_usuario'];
            $id_grupo=$usuario['id_grupo'];
            echo "<tr>
                      <td>" . $usuario['nombre'] . "</td>
                      <td>" . $usuario['nombre_grupo'] . "</td>
                      <td><a href='../model/altabaja.php?id=$id&grupo=$id_grupo&el=0'>Cambiar</a></td>
                      <td><a href='../model/altabaja.php?id=$id&grupo=$id_grupo&el=1'>Eliminar</a></td>
                      
                 </tr>";
        }
       // $id=$usuario['id_usuario'];
      //  echo "<a href='../model/altabaja.php?id=$id'>Alta/Baja</a>";
        ?>
    </table>
</div>
</body>
</html>
