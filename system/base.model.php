<?php

class BaseModel{
    private $con;
    private $rs;

    function __construct(){

        $DB_HOST = $_ENV['DB_HOST'];
        $DB_NAME = $_ENV['DB_NAME'];
        $DB_USERNAME = $_ENV['DB_USERNAME'];
        $DB_PASSWORD = $_ENV['DB_PASSWORD'];
        
        $this->con = mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD, $DB_NAME);
        if(!$this->con){
            die("Unable to connect Database. Please check credentials");
        }
    }

    public function executeQuery($sql){
        $this->rs = mysqli_query($this->con,$sql);
    }

    public function getResults(){
        $data = mysqli_fetch_object($this->rs);
        return $data;
    }
}
