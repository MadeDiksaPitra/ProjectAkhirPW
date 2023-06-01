<?php

include_once("../Models/model_admin.php");

class controller_admin
{
    public $model;

    public function __construct()
    {
        $this->model = new model_admin();
    }
    public function view()
    {
        $data = $this->model->getSemuaData();
        include '../Views/view-admin/view-zoo/zoo.php';
    }

    public function add($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        session_start();
        print_r("ini file control");

        $this->model->setData($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);
        header("location:../admin-zoo");
    }

    public function delete($id)
    {
        $this->model->deleteRow($id);

        header("location:../admin-zoo");
    }

    public function update($no, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        $e = $this->model->updateRow($no, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);
        include '../Views/view-admin/view-update/update.html';
    }

    public function row($id)
    {
        return $data = $this->model->getUpdateRow($id);
    }

    public function viewAdmin($email)
    {
        $data = $this->model->getAllRowAdmin();
        $data2 = $this->model->getRowAdmin($email);
        include '../Views/view-admin/view-profile/profile.html';
    }
}
