<?php 
    include "../config/Db.class.php";

class Category extends Db{
    

    private $description;
    
    public function __construct($description) {
        $this->description = $description;
    }

    //save category description and code
    
    public function save(){
        $sql = "INSERT INTO CATEGORIA(categoria_desc) VALUES ( '$this->description')";
        $result = $this->connect()->query($sql);
        return $result;
    }

    

    //create a method that returns a object of type Categorie

    public  function getCategories()
    {
        $sql = "SELECT * FROM CATEGORIA";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        

        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }

        return [];
    }
}