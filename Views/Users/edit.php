<h1>Editar Usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="description">Editar Nombre Usuario</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a user" name="name" value ="<?php if (isset($users["name"])) echo $users['name'];?>">
        <label for="description">Editar Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email"value ="<?php if (isset($users["email"])) echo $users['email'];?>">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>