<?php
    require_once("c://xampp/htdocs/Proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET["id"]);


?>