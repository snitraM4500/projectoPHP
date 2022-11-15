<?php 

class Db
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'exercicio';

    public function connect()
    {
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($mysqli->connect_error) {
            die("Conexao falhou: " . $mysqli->connect_error);
        }
        return $mysqli;
    }

}