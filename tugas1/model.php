<?php
class model
{
    private $nim;
    private $nama;
    private $programstudi;
    private $email;
    public $dbConn;
    protected $tablename = 'datamahasiswa';
    public $hasil = array();

    public function __construct()
    {
        global $mysqli;
        $this->dbConn = $mysqli;
    }

    public function setDataMahasiswa($nim, $nama, $programstudi, $email) { //Create
        require "koneksi.php";
        $statement = $this->dbConn->prepare("INSERT INTO $this->tablename (nim, nama, programstudi, email) VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssss", $nim, $nama, $programstudi, $email);
        $result = $statement->execute();
        $statement->close();
        return $result;
    }

    public function getDataMahasiswa() //Read
    {
        require "koneksi.php";
        $rs = $mysqli->query("SELECT * FROM datamahasiswa");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    public function editDataMahasiswa($nim, $nama, $programstudi, $email) //Update
    {
        require "koneksi.php";
        $statement = $this->dbConn->prepare("UPDATE $this->tablename SET nim=?, nama=?, programstudi=?, email=? WHERE nim=?");
        $statement->bind_param("isssi", $nim, $nama, $programstudi, $email, $nim);
        $result = $statement->execute();
        $statement->close();
        return $result;
    }
    
    public function deleteDataMahasiswa($nim) //Delete
    {
        require "koneksi.php";
        $statement = $this->dbConn->prepare("DELETE FROM $this->tablename WHERE nim=?");
        $statement->bind_param("i", $nim);
        $result = $statement->execute();
        $statement->close();
        return $result;
    }
}
