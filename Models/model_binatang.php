<?php
require "../opt/connection.php";
class model_binatang
{
    public function getListNama()
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT nama FROM list_binatang");

        return $rs;
    }

    public function getDeskripsi($id)
    {
        global $mysqli;

        $rs = $mysqli->query("SELECT * FROM list_binatang WHERE id = '$id'");

        return $rs;
    }
}