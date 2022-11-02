<?php
    include("database.php");

    if(array_key_exists("username", $_GET) &&
    array_key_exists("name", $_GET) &&
    array_key_exists("address", $_GET) &&
    array_key_exists("email", $_GET)){

        $bd = new Database("localhost: 3306", "root", "", "acr05");
        $bd->createUsers($_GET["username"], $_GET["name"],$_GET["adress"], $_GET[]);

        
    }

    die()


?>