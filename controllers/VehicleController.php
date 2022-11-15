<?php 
    include "../models/Veiculo.php";
    
    $code = $_POST['code'];
    $plate = $_POST['plate'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $category = $_POST['category'];
    $owner = $_POST['owner'];

    $vehicle = new Vehicle($code,$plate,$brand,$model,$category,$owner);
    $result = $vehicle->save();
    if($result){
        echo "Veiculo salvo com sucesso!";
    }else{
        echo "erro ao salvar veiculo";
    }
?>