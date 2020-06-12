<?php

 
class Employee_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get employee by id
     */
    function get_employee($id) {
        return $this->db->get_where('employees',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all employees
     */
    public function get_employees($id = false)
        if($id != false){
            $filter = array('id' => $id);
        }
        else
            $filter = array();
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('employee', $filter);
        $employees = $query->result_array();

        return $employees;
    }
        
    /*
     * function to add new employee
     */
    public function create_employee() {
        $this->load->helper('url';
        $data = array(
            'id' => $this->input->post('id');
            'lastName' => $this->input->post('firstName'),
            'firstName' => $this->input->post('lastName'),
            'title' => $this->input->post('title')
        );

        $result = $this->db->insert('employee', $data); //INSERT INTO employee (id, firstName, lastName, title) values ($id, $firstName, $lastName, $title)    }
    
    /*
     * function to update employee
     */
    function update($id = false) {
        $this->load->helper('url');

        $data = array(
            'id' => $this->input->post('id');
            'lastName' => $this->input->post('firstName'),
            'firstName' => $this->input->post('lastName'),
            'title' => $this->input->post('title')
        );

        $this->db->replace('employee', $data);
    }
    
    /*
     * function to delete employee
     */
    public function delete_employee($id = false){
        if(name != false){
            $this->db->where('id', $id);
            $this->db->delete('employee');
        }
    }