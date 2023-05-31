<?php

include_once("m_data.php");

class c_data
{
    public $model;

    public function __construct()
    {
        $this->model = new m_data();
    }
    public function invoke()
    {
        $data = $this->model->getSemuaData();
        include 'v_data.php';
    }

    public function add($nim, $nama, $prodi, $email)
    {
        session_start();

        $e = $this->model->setData($nim, $nama, $prodi, $email);

        if ($e == "") {
            header("location:../data/");
        } else {
            $_SESSION['temp'] = $e;
            header("location:../tambah/");
        }
    }

    public function delete($nim)
    {
        $this->model->deleteRow($nim);

        header("location:../data/");
    }

    public function update($no, $nim, $nama, $prodi, $email)
    {
        $e = $this->model->updateRow($no, $nim, $nama, $prodi, $email);
        header("location:../data/");
    }

    public function row($no)
    {
        return $data = $this->model->getRow($no);
    }

    public function log()
    {
        session_start();
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $data = $this->model->login($user, $pass);

        if ($data == "admin") {
            $_SESSION['username'] = 'admin';
            header("location:../data/");
        } else {
            $_SESSION['temp'] = "error";
            header("location:../login/");
        }

        
    }
}
