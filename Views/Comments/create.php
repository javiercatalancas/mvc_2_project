<h1>Crear comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Seleccionar Usuario</label>
        <!-- /* MONTAR UN SELECT CON LISTADO DE USUARIOS POR EMAIL */ -->

        <select class="form-select" aria-label="Default select example">
        <option selected>Usuarios</option>

        <?php
        foreach($users as $user){
            echo "<option value=".$user['id'].">".$user['email']."</option>";

        }
        

        ?>

        <!-- <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option> -->
        </select>
        <!-- <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title"> -->
    </div>

    <div class="form-group">
        <label for="description">Comentario</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>