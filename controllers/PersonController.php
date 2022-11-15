<?php 
    include "../models/Person.php";
    
    $code = $_POST['code'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $person = new Person($code,$name, $id);
    $result = $person->save();
    if($result){
        echo "Pessoa salva com sucesso!";
    }else{
        echo "erro ao salvar pessoa";
    }
?>