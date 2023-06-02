<?php
session_start();
include_once("../Models/model_admin.php");

class controller_admin
{
    public $model;

    public function cekSession()
    {
        if (!isset($_SESSION["email"])) {
            header("location:../admin-login");
        }
    }

    public function __construct()
    {
        $this->model = new model_admin();
    }
    public function view()
    {
        $this->cekSession();
        $data = $this->model->getSemuaData();
        include '../Views/view-admin/view-sidebar/sidebar.php';
        include '../Views/view-admin/view-logout/logout.php';
        include '../Views/view-admin/view-zoo/zoo.php';
    }

    public function add($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        $this->cekSession();
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
        $this->cekSession();
        $this->model->updateRow($no, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);
        header("location:../admin-zoo");
    }

    public function row($id)
    {
        $data = $this->model->getUpdateRow($id);
        return $data;
    }

    public function viewAdmin($email)
    {
        $this->cekSession();
        $data = $this->model->getAllRowAdmin();
        $data2 = $this->model->getRowAdmin($email);
        include '../Views/view-admin/view-sidebar/sidebar.php';
        include '../Views/view-admin/view-logout/logout.php';
        include '../Views/view-admin/view-profile/profile.php';
    }

    public function log()
    {
    }

    public function namaFile()
    {
        $data = $this->model->getCurrentTimeMillis();
        return $data;
    }
}
