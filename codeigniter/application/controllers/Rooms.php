<?php
    class Rooms extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Rooms_model');
            $this->load->helper('url');
        }

        public function view($id = false, $page = 'Rooms'){
            $data['pageTitle'] = $page;
            $data['rooms'] = $this->Rooms_model->get_rooms($id);

            $this->load->view('templates/header');
            $this->load->view('ceil/rooms/rooms', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

        }

        public function delete(){

        }
    }