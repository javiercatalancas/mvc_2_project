<h1>Crear comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Seleccionar Usuario</label>
        <!-- /* MONTAR UN SELECT CON LISTADO DE USUARIOS POR EMAIL */ -->

        <select class="form-select" aria-label="Default select example" name="users">
        <option selected>Usuarios</option>

        <?php
        foreach($users as $user){
            echo "<option value=".$user['id'].">".$user['email']."</option>";
        }
        ?>
        
        </select>
        <br/>
        <label for="title">Seleccionar Post</label>
        
        <select class="form-select" aria-label="Default select example" name="posts">
        <option selected>Posts</option>

        <?php
        foreach($posts as $post){
            echo "<option value=".$post['id'].">".$post['title']."</option>";
        }
        ?>

        </select>
    </div>

    <div class="form-group">
        <label for="description">Comentario</label>
        <input type="text" class="form-control" id="user_id, post_id" placeholder="Enter a description" name="body">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
</form>