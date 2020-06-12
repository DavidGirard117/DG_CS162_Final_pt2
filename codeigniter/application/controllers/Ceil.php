<?php
    class Ceil extends CI_Controller{
        public function index(){

            $data['title'] = "Ceil Hotel";

            $data['ceil'] = $this->ceil_model->get_ceil();

            $this->load->view('templates/header');
            $this->load->view('ceil/index', $data);
            $this->load->view('templates/footer');
            
        }
    }