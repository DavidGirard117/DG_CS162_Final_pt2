<?php
    class Ceil_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_ceil(){
            $query = $this->db->get('ceil');
            return $query->result_array();
        }
    }