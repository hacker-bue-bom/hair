<?php
    include ("./classes/product.php");
    session_start();

    $products = array();

    if(array_key_exists('products', $_SESSION)) {
        $products = $_SESSION["products"];
    } else {
        $SESSION['products'] = $products;
    }
?>

<html>
    <body>
        <h1>
            EXERCICIO 3 -PHP
        </h1>
        <br>
        <a href="./product.php">Novo Produto</a>
        <ul>
            <?php
            foreach($products as $product) {
                echo $product->toHTML_LI();
            }
            
            ?>
            <li>
                <a href="./clear.php">Limpar sessao</a>
            </li>
        </ul>
    </body>
</html>