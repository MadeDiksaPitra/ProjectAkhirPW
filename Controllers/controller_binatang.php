<?php

include_once("../Models/model_binatang.php");

class controller_admin
{
    public $model;

    public function __construct()
    {
        $this->model = new model_binatang();
    }
    public function viewListBinatang()
    {
        $data = $this->model->getListNama();
        include '../Views/view-user/view-list/list.html';
    }

    public function viewDeskripsi($id)
    {
        $data = $this->model->getDeskripsi($id);
        include '../Views/view-user/view-data/data.html';
    }
}