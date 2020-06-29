<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Diarios Pendientes</h2>
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

    <form action="./model/aprobarDiario.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="noti">Seleccionar id del diario</label>
        <select name='id' id='noti'>
            <?php
                 foreach ($diarios as $diario) {
                 echo "<option value='" . $diario['id_diario'] . "'>" . $diario['id_diario'] . "</option>";
                 }
            ?>
        </select>
        <input type="submit" value="Aprobar">
    </form>
</div>
