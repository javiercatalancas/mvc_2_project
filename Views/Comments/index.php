<h1>Comentarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc_2_project/comments/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Comentario</a>
        <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($comments as $comment)
        {
            echo '<tr>';
            echo "<td>" . $comment['id'] . "</td>";
            echo "<td>" . $comment['body'] . "</td>";
           
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_2_project/comments/edit/" . $comment["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/mvc_2_project/comments/delete/" . $comment["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a>
           <a class='btn btn-info btn-xs' href='/mvc_2_project/comments/detail/" . $comment["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-edit'></span> Detalle</a>";
           echo "</td>";
            echo "</tr>";
            
          }

           
            

         /*    echo"<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Detalles</button>
            <div class='modal' id='myModal'>
            <div class='modal-dialog'>
            <div class='modal-content'>

            <div class='modal-header'>
            <h4 class='modal-title'>VISTA DETALLE</h4>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>";
         
           echo " <div class='modal-body'>
            <p>ID: ". $comment['id'] ."</p>
            <p>Comentario: ". $comment['body'] ."</p>";
          
            echo" <div class='modal-footer'>
            <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
            
          </div>
        </div>
      </div>
    </div> */

   
        
        ?>
    </table>
</div>
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  
    
      
        
         
    <!-- ESCRIBIR LOS DATOS -->
     