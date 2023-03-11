<?php
Class DB{

    //a access specifiers
    
    private $hostname = 'localhost';
    private $user = "root";
    private $pass = "";
    private $dbname = "record";
    private $conn = null;
   
    public function __construct()
    {
        $this->conn = mysqli_connect($this->hostname, $this->user, $this->pass, $this->dbname);
        return $this->conn;
    }
    public function filterPostData($data) {
        $data = htmlentities($data);
        $data = stripslashes($data);
        $data =  mysqli_real_escape_string($this->conn, $data); 
        return $data;
    }

    public function select($query){
        $result = mysqli_query($this->conn, $query);
        $num = mysqli_num_rows($result); 
        if($num > 0) {
            $data = [];
            while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($data, $rows);
            }
             return $data;
        } else {
            return 0;
        }
    }   
}
if(isset($_GET['message'])) {
    if($_GET['message'] == 'added') {
      echo "Record  Edited successfully";
    } else {
      echo "Record Not Add something Worng";
    }
  }

$db = new DB();
?>