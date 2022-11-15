<?php 
    include "../models/Category.php";
    
    $description = $_POST['description'];
    $category = new Category( $description);
    $result = $category->save();
    if($result){
        echo "Categoria salva com sucesso!";
    }else{
        echo "erro ao salvar categoria";
    }
?>