<?php 


include "../config/Db.class.php";
class Vehicle extends Db
{
    private $code;
    private $brand;
    private $plate;
    private $model;
    private $category;
    private $owner;
        
    public function __construct($code,$plate,$brand,$model,$category,$owner)
    {
        $this->code = $code;
        $this->plate = $plate;
        $this->brand = $brand;
        $this->model = $model;
        $this->category = $category;
        $this->owner = $owner;
    }

    public function save()
    {
        $sql = "INSERT INTO VEICULO(veiculo_cod,veiculo_matricula,cod_marca,modelo,cod_modelo,cod_titular) VALUES ('$this->code','$this->plate','$this->brand','$this->model','$this->category','$this->owner')";
        $result = $this->connect()->query($sql);
        return $result;
    }

    //create a method that returns a object of type Brand

    public  function getVehicles()
    {
        $sql = "SELECT * FROM VEICULO";
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