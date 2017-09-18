<?php

$name=htmlspecialchars($_POST['prod_name']);
$price=htmlspecialchars($_POST[prod_price]);
$image=htmlspecialchars($_POST);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addProduct</title>
</head>
<body>
   <form action="addProduct.php" method="post">

        <label for="prod_name">Entrez votre nom</label>
        <input type="text" name="prod_name"  id="prod_name"/>

        <label for="price">Entrez le prix</label>
        <input type="numbers" stop="0,01" name="prod_price" id="prod_price"/>

        <label for="prod_image">Entrez le nom de l'image</label>
        <input type="text" name="prod_image" id="prod_image"/>


        <input type="submit" value="Valider" />
    </form>



</body>
</html>