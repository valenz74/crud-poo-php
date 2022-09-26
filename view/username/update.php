<?php
    require_once("c://xampp/htdocs/Proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST["id"],$_POST["nombre"]);

?>