<?php

 
class Booking_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get booking by id
     */
    function get_employee($id) {
        return $this->db->get_where('employees',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all bookings
     */
    public function get_bookings($id = false)
        if($id != false){
            $filter = array('id' => $id);
        }
        else
            $filter = array();
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('booking', $filter);
        $bookings = $query->result_array();

        return $bookings;
    }
        
    /*
     * function to add new booking
     */
    public function create_booking() {
        $this->load->helper('url';
        $data = array(
            'id' => $this->input->post('id');
            
        );

        $result = $this->db->insert('booking', $data); //INSERT INTO booking
    
    /*
     * function to update booking
     */
    function update($id = false) {
        $this->load->helper('url');

        $data = array(
            'id' => $this->input->post('id');
        );

        $this->db->replace('booking', $data);
    }
    
    /*
     * function to delete booking
     */
    public function delete_booking($id = false){
        if(name != false){
            $this->db->where('id', $id);
            $this->db->delete('booking');
        }
    }