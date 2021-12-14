<h1>Posts</h1>
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
           
            echo "<td class='text-center'><a href='/mvc_2_project/posts/delete/" . $post["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a>
            <a class='btn btn-info btn-xs' href='/mvc_2_project/posts/detail/" . $post["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Detalle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>