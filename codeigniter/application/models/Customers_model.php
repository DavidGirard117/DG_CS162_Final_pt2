<?php

 
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customer by id
     */
    function get_customer($id) {
        return $this->db->get_where('customers',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all customers
     */
    public function get_customers($id = false)
        if($id != false){
            $filter = array('id' => $id);
        }
        else
            $filter = array();
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('customer', $filter);
        $customers = $query->result_array();

        return $customers;
    }
        
    /*
     * function to add new customer
     */
    public function create_customer() {
        $this->load->helper('url';
        $data = array(
            'id' => $this->input->post('id');
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            
        );

        $result = $this->db->insert('customer', $data); //INSERT INTO customer (id, firstName, lastName) values ($id, $firstName, $lastName)    }
    
    /*
     * function to update customer
     */
    function update($id = false) {
        $this->load->helper('url');

        $data = array(
            'id' => $this->input->post('id');
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
        );

        $this->db->replace('customer', $data);
    }
    
    /*
     * function to delete customer
     */
    public function delete_customer($id = false){
        if(name != false){
            $this->db->where('id', $id);
            $this->db->delete('customer');
        }
    }