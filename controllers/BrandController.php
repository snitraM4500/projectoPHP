<?php 

    include "../models/Brand.php";

    $code = $_POST['code'];
    $description = $_POST['brand'];
    $brand = new Brand($description,$code);
    $result = $brand->save();
    if($result){
        echo "Marca salva com sucesso!";
    }else{
        echo "erro ao salvar marca";
    }

?>