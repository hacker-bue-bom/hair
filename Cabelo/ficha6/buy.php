<?php
    include ("./classes/product.php");
    session_start();
    $products = $_SESSION["products"];
    Product::initClass();

    $id =0;

    if(array_key_exists('p',$_GET)){
        $id=$GET['p'];
    }

    if($id != 0) {
        foreach($products as $product) {
            if ($product->id == $id) {
                $product->stock++;
            }
        }
    }
    $_SESSION['products']=$products;
    header("location: ./");
?>