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

    public function new_form(){

        $viewData=new stdClass();
        
        $viewData->viewFolder=$this->viewFolder;
        $viewData->subViewFolder="add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);

    }

    public function save(){

       $this->load->library("form_validation");

       // validation kuralları
       $this->form_validation->set_rules("title","Başlıkk","required|trim");
       $this->form_validation->set_message(
           array(
               "required"=>"{field} Alanını Doldurulmalıdır"
               )
       );

       //form_validation çalıştırılır

       $validate=$this->form_validation->run();


       if($validate){

           echo "Kayıt işlemi başladı";

       }else{

            echo validation_errors();
            
       }


    }

}