<?php 
    include "Category.php";

    
    $code = $_POST['code'];
    $description = $_POST['description'];
    $category = new Category($code, $description);
    $result = $category->save();
    if($result){
        echo "Categoria salva com sucesso!";
    }else{
        echo "erro ao salvar categoria";
    }
?>