<?php

class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    
        $this->data['title'] = 'Киномонстр - сайт о кино';
     
        $this->load->model("news_model");
        $this->data['news'] = $this->news_model->getNews();

        $this->load->model("films_model");
        $this->data['films'] = $this->films_model->getFilmsByRating(10);
        
    }

    public function generate_view($route, $data)
    {
        $this->load->view("templates/header", $data);
        $this->load->view($route, $data);
        $this->load->view("templates/footer");
    }

}