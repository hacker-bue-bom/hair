<?php
    include("./classes/product.php");

    session_start();

    $products = $_SESSION['products'];
    
    $id = 0;

    if(array_key_exists('p', $_GET)) {
        $id = $_GET['p'];
    };

    $product = NULL;

    if($id !=0) {
        foreach($products as $pd){
            if($pd->id == $id) {
                $product = $pd;
            }
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 3 - php</h1>
    <h2>
        <?php
            print ($id== 0) ? "novo produto":"editar produto"
        ?>
        <a href="./">voltar</a>

    </h2>
    <form action="saveproduct.php" method="POST">
        <input type="hiddem" name="id" value="<?php print$id?>">
        Nome :<input name="name" type="text"><?php print(isset($product)) ?"value='".$product->name."'": "" ?><br>
        Descricao :<input name="desc" type="text"><?php print(isset($product)) ?"value='".$product->description."'": "" ?><br>
        valor :<input name="value" type="number"><?php print(isset($product)) ?"value='".$product->value."'": "" ?><br>
        <input type="submit" value="criar"><br>
    </form>
</body>
</html>