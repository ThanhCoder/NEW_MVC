<?php

class Database{
    
    const SERVERNAME = "localhost:3306";
    const USERNAME="root";
    const PASSWORD = "";
    const DBNAME ="projectmvc";
    //protected $connect;

    public function connect(){
        $connect = mysqli_connect(self::SERVERNAME,self::USERNAME,self::PASSWORD,self::DBNAME);
        //mysqli_select_db($this->connect,$this->dbname);
        //mysqli_query($this->connect,"SET NAME 'uft8'");
        mysqli_set_charset($connect,"uft8");

        //$sql = "select * from products ";
        //$query = mysqli_query($this->connect,$sql);
        //while($row = mysqli_fetch_assoc($query)){
            //var_dump($row);
        //}
        //var_dump($query);

        if(mysqli_connect_errno() === 0){
            return $connect;
        }
        return false;
    }

   
}

//$CONSO = new Database;
//$CONSO->connect();