<?php 
    include "../models/Model.php";
    
    $brand = $_POST['brand'];
    $code = $_POST['code'];
    $description = $_POST['description'];
    $model = new Model($brand,$code, $description);
    $result = $model->save();
    if($result){
        echo "Modelo salva com sucesso!";
    }else{
        echo "erro ao salvar modelo";
    }
?>