<?php
$noticia=$noticia[0];
?>
<html>
<head></head>
<body>
<main>
   <div class="w3-container w3-content w3-center w3-padding-64">
       <?php
       echo "
           <h2 class='w3-wide'>". $noticia['titulo'] ."</h2>
           <div><img src=" .$noticia['url_imagen'] ." width=500></div>
            <div><p>".$noticia['cuerpo']."</p></div>
       ";
       ?>
   </div>
</main>
</body>
</html>
