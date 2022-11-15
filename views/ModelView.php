<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "../includes/Navbar.php";
        include "../models/Brand.php";
    ?>
    <form action="../controllers/ModelController.php" method="POST">
        <label for="model">Modelo</label>
        <input type="text" name="model" id="model">
        <label for="brand">Marca</label>
        <select name="brand" id="brand">
            <?php

            $brands = new Brand(null);
            $brands = $brands->getBrands();
            foreach ($brands as $brand) {
                ?>
            <option value="<?php echo $brand["descricao"]?>"><?php echo $brand["descricao"]?></option>
            <?php 
            }
        ?>

        </select>
        <input type="submit" value="Registar">

</body>

</html>