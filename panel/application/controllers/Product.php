<?php

class Product extends CI_Controller{


    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder="product_v";
        $this->load->model("product_model");

    }

    public function index(){

        $viewData=new stdClass();

        //vtden verılerın getırılmesi
        $items=$this->product_model->get_all();
      
        //view e gonderılecek degerler        
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="list";
        $viewData->items=$items;


       $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

}