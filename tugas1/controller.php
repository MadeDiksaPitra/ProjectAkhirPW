<?php
include_once("model.php");
class controller
{
    public $model;

    public function __construct()
    {
        $this->model = new model();
    }

    public function invoke()
    {
        $data_mhs = $this->model->getDataMahasiswa();
        include 'view.php';
    }

    public function del($nim)
    {
        $data_mhs = $this->model->deleteDataMahasiswa($nim);
    }

    public function edit($nim, $nama, $programstudi, $email)
    {
        $data_mhs = $this->model->editDataMahasiswa($nim, $nama, $programstudi, $email);
    }
    
    public function set($nim, $nama, $programstudi, $email)
    {
        $data_mhs = $this->model->setDataMahasiswa($nim, $nama, $programstudi, $email);
    }
}
