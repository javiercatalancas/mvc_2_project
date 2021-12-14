<h1>Vista Detalle</h1>
<div class="card" style="width: 20rem; margin:auto ">
  <div class="card-body">
    <h5 class="card-title">Datos del Usuario</h5>

<?php 
echo "<b>Nombre de usuario:</b> ".$detalle["name"];
echo "<br>";
echo "<b>Id de usuario: </b>".$detalle["id"];
echo "<br>";
echo "<b>Email:</b> ".$detalle["email"];
echo "<br>";
echo "<b>Password :</b>".$detalle["password"];
echo "<br>";
echo "<b>Token: </b>".$detalle["remember_token"];
echo "<br>";
?>
 </div>
</div>
