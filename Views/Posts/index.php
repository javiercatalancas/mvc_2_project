<h1>Comentarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
       
        <tr>
            <th>ID</th>
            <th>Post</th>

            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
           
            echo "<td class='text-center'><a href='/mvc_2_project/comments/delete/" . $post["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>