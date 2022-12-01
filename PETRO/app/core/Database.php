<?php
class Database{
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "PETRO";
        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;
    }


}