<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablenamefeatured1;
        public $tablenamefeatured2;
        public $tablenamegaming;
        public $tablenamefashion;
        public $tablenameelectronics;
        public $tablenamesports;
        public $tablenamefurniture;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "illustriousmarketing",
        $tablenamefeatured1 = "featuredproducts1",
        $tablenamefeatured2 = "Featuredproducts2",
        $tablenamegaming = "gaming",
        $tablenamefashion = "fashion",
        $tablenameelectronics = "electronics",
        $tablenamesports = "sports",
        $tablenamefurniture = "furniture",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablenamefeatured1 = $tablenamefeatured1;
      $this->tablenamefeatured2 = $tablenamefeatured2;
      $this->tablenamegaming = $tablenamegaming;
      $this->tablenamefashion = $tablenamefashion;
      $this->tablenameelectronics = $tablenameelectronics;
      $this->tablenamefurniture = $tablenamefurniture;
      $this->tablenamesports = $tablenamesports;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table      
            $sql1 = " CREATE TABLE IF NOT EXISTS $tablenamefeatured1
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";
            
            $sql2 = " CREATE TABLE IF NOT EXISTS $tablenamefeatured2
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";
            
            $sql3 = " CREATE TABLE IF NOT EXISTS $tablenamegaming
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";

            $sql4 = " CREATE TABLE IF NOT EXISTS $tablenamefashion
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";

            $sql5 = " CREATE TABLE IF NOT EXISTS $tablenameelectronics
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";

            $sql6 = " CREATE TABLE IF NOT EXISTS $tablenamesports
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";

                            
            $sql7 = " CREATE TABLE IF NOT EXISTS $tablenamefurniture
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            product_name VARCHAR (25) NOT NULL,
                            product_price FLOAT,
                            product_image VARCHAR (100)
                            );";

            if (!mysqli_query($this->con, $sql1)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql2)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql3)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql4)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql5)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql6)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            if (!mysqli_query($this->con, $sql7)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
             else{
                return false;
            }
        }
    }
    // get product from the database
    //public function getData(){
    //    $sql = "SELECT * FROM $this->tablename";

    //    $result = mysqli_query($this->con, $sql);

    //    if(mysqli_num_rows($result) > 0){
    //        return $result;
    //    }
   // }

    public function getFeatured1(){
        $sql1 = "SELECT * FROM $this->tablenamefeatured1";

        $result1 = mysqli_query($this->con, $sql1);

        if(mysqli_num_rows($result1) > 0){
            return $result1;
        }
    }

    public function getFeatured2(){
        $sql2 = "SELECT * FROM $this->tablenamefeatured2";

        $result2 = mysqli_query($this->con, $sql2);

        if(mysqli_num_rows($result2) > 0){
            return $result2;
        }
    }

    public function getGaming(){
        $sql3 = "SELECT * FROM $this->tablenamegaming";

        $result3 = mysqli_query($this->con, $sql3);

        if(mysqli_num_rows($result3) > 0){
            return $result3;
        }
    }

    public function getFashion(){
        $sql4 = "SELECT * FROM $this->tablenamefashion";

        $result4 = mysqli_query($this->con, $sql4);

        if(mysqli_num_rows($result4) > 0){
            return $result4;
        }
    }

    public function getElectronics(){
        $sql5 = "SELECT * FROM $this->tablenameelectronics";

        $result5 = mysqli_query($this->con, $sql5);

        if(mysqli_num_rows($result5) > 0){
            return $result5;
        }
    }

    public function getSports(){
        $sql6 = "SELECT * FROM $this->tablenamesports";

        $result6 = mysqli_query($this->con, $sql6);

        if(mysqli_num_rows($result6) > 0){
            return $result6;
        }
    }

    public function getFurniture(){
        $sql7 = "SELECT * FROM $this->tablenamefurniture";

        $result7 = mysqli_query($this->con, $sql7);

        if(mysqli_num_rows($result7) > 0){
            return $result7;
        }
    }

}






