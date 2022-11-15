<?php 


include "../config/Db.class.php";
class Person extends Db
{
    private $name;
    private $code;
    private $id;
        
    public function __construct($name,$code,$id)
    {
        $this->code = $code;
        $this->name = $name;
        $this->id = $id;
    }

    public function save()
    {
        $sql = "INSERT INTO PESSOA(pessoa_cod,pessoa_nome,pessoa_bi) VALUES ('$this->code','$this->name','$this->id')";
        $result = $this->connect()->query($sql);
        return $result;
    }

    //create a method that returns a object of type Person

    public  function getPersons()
    {
        $sql = "SELECT * FROM PESSOA";
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