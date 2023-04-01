<?php
    class koneksi 
    {
       public $host = "localhost";
       public $username = "root";
       public $password = "";
       public $database = "db_zakat";
       public $koneksi = "";
       
       function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host, $this->username,
            $this->password, $this->database
        );
        if (mysqli_connect_errno()) {
            echo "koneksi database gagal : ".
            mysqli_connect_errno();
        }
    }
    public function Insert($query)
    {
        $insert = "INSERT INTO $query";

        return mysqli_query($this->koneksi,$insert);
    }
    public function Update($query,$id)
    {
        $update = "UPDATE $query WHERE `id` = $id";

        return mysqli_query($this->koneksi,$update);
    }


}
    $db = new koneksi;


?>