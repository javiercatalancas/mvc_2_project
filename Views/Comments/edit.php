<h1>Editar Comentarios</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Editar</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce comentario" name="body" value ="<?php if (isset($comment["body"]))echo $comment['body'];?>">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>