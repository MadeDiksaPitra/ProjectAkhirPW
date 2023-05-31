<?php
require "../opt/koneksiMVC.php";
class m_data
{
    private $nim;
    private $nama;
    private $prodi;
    private $email;
    public $hasil = array();

    public function setData($nim, $nama, $prodi, $email)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->email = $email;
        global $mysqli;

        try {
            $mysqli->query("INSERT INTO data_mahasiswa VALUES ('$this->nim', '$this->nama', '$this->prodi', '$this->email')");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }

    public function getSemuaData()
    {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM data_mahasiswa");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }

        $this->hasil = $rows;
        return $this->hasil;
    }

    public function deleteRow($nim)
    {
        global $mysqli;

        $mysqli->query("DELETE FROM data_mahasiswa WHERE nim = '$nim'");
    }

    public function updateRow($no, $nim, $nama, $prodi, $email)
    {
        global $mysqli;

        try {
            $mysqli->query("UPDATE data_mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', email='$email' WHERE nim='$no'");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }

    public function getRow($nim)
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT * FROM data_mahasiswa WHERE nim = '$nim'");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows = $row;
        }
        return $rows;
    }

    public function login($user, $pass){
        if ($user == "admin" && $pass == "admin") {
            return "admin";
        }
        else {
            return "";
        }
    }
}
