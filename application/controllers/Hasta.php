<?php

class Hasta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hasta_model");
    }

    public function insert()
    {
        $id = $this->input->post("id");
        $ad = $this->input->post("ad");
        $soyad = $this->input->post("soyad");
        $tc = $this->input->post("tc");

        $insert = $this->hasta_model->insert(array(
            "id" => $id,
            "ad" => $ad,
            "soyad" => $soyad,
            "tc" => $tc,
        ));
        if ($insert) {
            redirect(base_url("Hasta/getAll"));
        } else {
            redirect(base_url("/"));
        }
    }
    public function getAll()
    {
        $hastalar = $this->hasta_model->getAll();
        $viewData = array(
            "hastalar" => $hastalar,
        );
        $this->load->view("liste", $viewData);
    }
    public function index()
    {

        $hastalar = $this->hasta_model->getAll();

        $viewData = array(
            "hastalar" => $hastalar,
        );

        $this->load->view("hasta", $viewData);
    }
}
