<h1>Edit comment</h1>
<form method='post' action='#'>
   <!--  <div class="form-group">
        <label for="title">Editar</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title" value ="<?php if (isset($comment["body"]));?>">
    </div> -->

    <div class="form-group">
        <label for="description">Comentario</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value ="<?php if (isset($comment["body"]));?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>