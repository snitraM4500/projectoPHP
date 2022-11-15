<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "../includes/Navbar.php" ?>

    //register brand form
    <form action="../controllers/BrandController.php" method="POST">
        <label for="brand">Marca</label>
        <input type="text" name="brand" id="brand">
        <input type="submit" value="Registar">
    </form>
</body>

</html>