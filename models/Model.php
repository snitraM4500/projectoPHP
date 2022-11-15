<?php 


include "../config/Db.class.php";
class Model extends Db
{
    private $brand;
    private $code;
    private $description;
        
    public function __construct($brand,$code,$description)
    {
        $this->code = $code;
        $this->brand = $brand;
        $this->description = $description;
    }

    public function save()
    {
        $sql = "INSERT INTO MODELO(modelo_cod,cod_marca,modelo_desc) VALUES ('$this->brand','$this->code','$this->description')";
        $result = $this->connect()->query($sql);
        return $result;
    }

    //create a method that returns a object of type Brand

    public  function getModels()
    {
        $sql = "SELECT * FROM MODELO";
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