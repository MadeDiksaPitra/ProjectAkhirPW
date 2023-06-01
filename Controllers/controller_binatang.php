<?php

include_once("../Models/model_binatang.php");

class controller_binatang
{
    public $model;

    public function __construct()
    {
        $this->model = new model_binatang();
    }
    public function viewListBinatang($kelas)
    {
        $data = $this->model->getListNama($kelas);
        include '../Views/view-user/view-list/list.php';
    }

    public function viewDeskripsi($id)
    {
        $data = $this->model->getDeskripsi($id);
        include '../Views/view-user/view-data/data.php';
    }
}