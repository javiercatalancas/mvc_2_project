<h1>Crear Usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Seleccionar Usuario</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>Usuarios</option>

        <?php
// ESTO NO TIENE SENTIDO AQUÍ
        foreach($users as $user){
            echo "<option value=".$user['id'].">".$user['email']."</option>";
        }
        ?>
        </select>
    </div>

    <div class="form-group">
        <label for="description">Nombre de Usuario</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a user" name="name">
        <label for="description">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email">
        <label for="description">Contraseña</label>
        <input type="text" class="form-control" id="password" placeholder="Enter a password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>