<h1>Usuarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc_2_project/users/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Usuario</a>
        <tr>
            <th>ID</th>
            <th>Usuario</th>

            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($users as $user)
        {
            echo '<tr>';
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
           
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_2_project/users/edit/" . $user["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/mvc_2_project/users/delete/" . $user["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a>
            <a class='btn btn-info btn-xs' href='/mvc_2_project/users/detail/" . $user["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Detalle</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>