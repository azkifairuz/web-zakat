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
    function tampil_Data_Banyak($query){
        $data = mysqli_query($this->koneksi,$query);
        while ($row = mysqli_fetch_assoc($data)) 
            $hasil[] =$row;
            return $hasil;
        
    }
    function tampil_Data_Satu($query){
        $get = mysqli_query($this->koneksi,$query);
        $data = mysqli_fetch_assoc($get);
        return $data;
        
    }
    function cek_data($query){
        $data = mysqli_query($this->koneksi,$query);
        $result = mysqli_num_rows($data);
        return $result;
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
    public function Delete($tableName,$id)
    {
        $delete = "DELETE FROM $tableName WHERE `id` = $id";

        return mysqli_query($this->koneksi,$delete);
    }

}
    $db = new koneksi;


?>