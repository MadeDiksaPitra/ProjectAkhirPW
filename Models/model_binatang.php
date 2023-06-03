<?php
require "../Models/opt/connection.php";
class model_binatang
{
    public function getListNama($kelas)
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT id, nama, foto_profil FROM list_binatang where kelas = '$kelas'");

        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows = $row;
        }

        return $rows;
    }

    public function getDeskripsi($id)
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT * FROM list_binatang WHERE id = '$id'");

        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows = $row;
        }

        return $rows;
    }
}
