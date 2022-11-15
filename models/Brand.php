<?php 


include "../config/Db.class.php";
class Brand extends Db
{

    private $code;
    private $description;
        
    public function __construct($description,$code)
    {
        $this->code = $code;
        $this->description = $description;
    }

    public function save()
    {
        $sql = "INSERT INTO MARCA (marca_cod,marca_desc) VALUES ('$this->code','$this->description')";
        $result = $this->connect()->query($sql);
        return $result;
    }

    //create a method that returns a object of type Brand

    public  function getBrands()
    {
        $sql = "SELECT * FROM MARCA";
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