<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/controller_client.php" method="post">
        <input type="text" name="cliente" value="1">
        <input type="text" name="nome" value="Creme aloe vera">
        <input type="text" name="qtd" value="1">
        <input type="text" name="id" value="2">
        <input type="text" name="preco" value="89.90">
    <button type="submit"  name="adicionar_prod" class="adicionar" value="1">Adicionar ao carrinho</button>
    </form>
    <?php

if(isset($_REQUEST["msg"])){

 $cod = $_REQUEST["msg"];
 require_once "../model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}

?>
</body>
</html>