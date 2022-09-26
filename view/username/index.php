<?php
    require_once("c://xampp/htdocs/Proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/Proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="/Proyecto/view/username/create.php" class="btn btn-primary" >Agregar nuevo Usuario</a>
</div>
<table class="table" >
    <thead>
        <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Nombre</th>
            <th scope="col" >Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0]?></th>
                    <th><?= $row[1]?></th>
                    <th>
                        <a href="show.php?id=<?=$row[0]?>" class="btn btn-primary" >Ver</a>
                        <a href="edit.php?id=<?=$row[0]?>" class="btn btn-success" >Modificar</a>
                                      <!-- Button trigger modal -->
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea Eliminar el Registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez Eliminado no se podra recuperar el Registro
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?=$row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button">Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                            </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay Registros en la Base de Datos</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>






<?php
    require_once("c://xampp/htdocs/Proyecto/view/head/footer.php");


?>