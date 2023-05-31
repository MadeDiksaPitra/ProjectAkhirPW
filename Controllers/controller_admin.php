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
        include '../Views/view-admin/view-zoo/zoo.html';
    }

    public function add($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        session_start();

        $e = $this->model->setData($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);

        if ($e == "") {
            header("location:../admin-view/index.php");
        } else {
            $_SESSION['temp'] = $e;
            header("location:../admin-create/index.php");
        }
    }

    public function delete($id)
    {
        $this->model->deleteRow($id);

        header("location:../admin-zoo/index.php");
    }

    public function update($no, $id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman)
    {
        $e = $this->model->updateRow($no, $id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);
        header("location:../admin-zoo/index.php/");
    }

    public function row($id)
    {
        return $data = $this->model->getUpdateRow($id);
    }

    // public function log()
    // {
    //     session_start();
    //     $user = $_POST["user"];
    //     $pass = $_POST["pass"];
    //     $data = $this->model->login($user, $pass);

    //     if ($data == "admin") {
    //         $_SESSION['username'] = 'admin';
    //         header("location:../data/");
    //     } else {
    //         $_SESSION['temp'] = "error";
    //         header("location:../login/");
    //     }

        
    // }

    public function viewAdmin()
    {
        $data = $this->model->getAllRowAdmin();
        include '../Views/view-admin/view-profile/profile.html';
    }

    public function viewProfileAdmin($email)
    {
        $data = $this->model->getRowAdmin($email);
        include '../Views/view-admin/view-profile/profile.html';
    }

    
}
