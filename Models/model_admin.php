<?php
require "./Models/opt/connection.php";
class model_admin
{
    private $email;
    private $no_telp;
    private $nama;
    private $tanggal_lahir;
    private $jenis_kelamin;
    private $divisi;
    private $password;
    
    public function setRowAdmin($email, $no_telp, $nama, $tanggal_lahir, $jenis_kelamin, $divisi, $password)
    {
        $this->email = $email;
        $this->no_telp = $no_telp;
        $this->nama = $nama;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->divisi = $divisi;
        $this->password = $password;

        global $mysqli;
        
        try {
            $mysqli->query("INSERT INTO admin_zoo VALUES ('$this->email', '$this->no_telp', '$this->nama', '$this->tanggal_lahir', '$this->jenis_kelamin, '$this->divisi', '$this->password')");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }
    
    public function getRowAdmin($email)
    {
        global $mysqli;
    
        $rs = $mysqli->query("SELECT * FROM admin_zoo WHERE email = '$email'");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows = $row;
        }
        return $rows;
    }
    
    public function getAllRowAdmin()
    {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM admin_zoo");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function deleteRowAdmin($email)
    {
        global $mysqli;

        $mysqli->query("DELETE FROM admin_zoo WHERE email = '$email'");
    }

    public function updateRowAdmin($no, $email, $no_telp, $nama, $tanggal_lahir)
    {
        global $mysqli;

        try {
            $mysqli->query("UPDATE admin_zoo SET email='$email', no_telp='$no_telp', nama='$nama', tanggal_lahir='$tanggal_lahir' WHERE email='$no'");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }

}
