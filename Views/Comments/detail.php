<h1>Vista Detalle</h1>

<div class="card" style="height: 20rem; width: 20rem; margin:auto ">
  <div class="card-body">
    <h5 class="card-title">Detalle de los comentarios</h5>
<?php 
echo "<b>Cuerpo del comentario: </b>".$detalle["body"];
echo "<br>";
echo "<b>ID: </b>".$detalle["id"];
echo "<br>";
echo "<b>Post asociado: </b>".$detalle["post_id"];
echo "<br>";
echo "<b>Usuario: </b>".$detalle["user_id"];    
?>
 </div>
  </div>