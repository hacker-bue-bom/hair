<?php
    include("./classes/product.php");

    session_start();
    Product::initClass();

    $products = $_SESSION["products"];

    $id=0;
    $name="";
    $desc = "";
    $value = "";

    if(array_key_exists("id", $_POST)) {
        $id = $_POST["id"];
    }

    if(array_key_exists("name", $_POST)) {
        $name = $_POST["name"];
    }

    if(array_key_exists("desc", $_POST)) {
        $desc = $_POST["desc"];
    }

    if(array_key_exists("value", $_POST)) {
        $value = $_POST["value"];
    }

    if ($id != 0) {
        foreach($products as $product) {
            if ($product->id == $id) {
                $product->name = $name;
                $product->desciption = $desc;
                $product->value = $value;
            }
        }
    } else {
        $product= new Product($name,$desc,$value);
        array_push($products, $product);
    }

    $_SESSION['products'] =$products;
    header("location: ./");
?>