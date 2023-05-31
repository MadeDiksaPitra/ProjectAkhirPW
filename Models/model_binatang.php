<?php
require "../opt/connection.php";
class model_binatang
{
    private $id;
    private $nama;
    private $kelas;
    private $fakta_unik;
    private $keterangan;
    private $habitat;
    private $makanan;
    private $cara_hidup;
    private $reproduksi;
    private $ancaman;
    private $foto_profil;
    private $foto_halaman;

    public function setData($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->fakta_unik = $fakta_unik;
        $this->keterangan = $keterangan;
        $this->habitat = $habitat;
        $this->makanan = $makanan;
        $this->cara_hidup = $cara_hidup;
        $this->reproduksi = $reproduksi;
        $this->ancaman = $ancaman;
        $this->foto_profil = $foto_profil;
        $this->foto_halaman = $foto_halaman;
        global $mysqli;

        try {
            $mysqli->query("INSERT INTO list_binatang VALUES ('$this->id', '$this->nama', '$this->kelas', '$this->fakta_unik', '$this->keterangan', '$this->habitat', '$this->makanan', '$this->cara_hidup', '$this->reproduksi', '$this->ancaman', ' $this->foto_profil', '$this->foto_halaman')");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }

    public function getSemuaData()
    {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM list_binatang");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function deleteRow($id)
    {
        global $mysqli;

        $mysqli->query("DELETE FROM list_binatang WHERE id = '$id'");
    }

    public function updateRow($no, $id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        global $mysqli;

        try {
            $mysqli->query("UPDATE list_binatang SET id='$id', nama='$nama', kelas='$kelas', fakta_unik='$fakta_unik', keterangan='$keterangan', habitat='$habitat', makanan='$makanan', cara_hidup='$cara_hidup', reproduksi='$reproduksi', ancaman='$ancaman', foto_profil='$foto_profil', foto_halaman='$foto_halaman' WHERE nim='$no'");
            return $e = "";
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }

    public function getRow($id)
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT * FROM list_binatang WHERE nim = '$id'");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows = $row;
        }
        return $rows;
    }
}