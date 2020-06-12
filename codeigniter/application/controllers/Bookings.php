<?php
class Bookings extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bookings_model');
    } 

    /*
     * Listing of bookings
     */
    function index()
    {
        $data['bookings'] = $this->Bookings_model->get_bookings(urldecode($id));
        
        $data['id'] = $id;
            $this->load->view('templates/header');
            $this->load->view('bookings/view', $data);
            $this->load->view('templates/footer');
       
    }

    /*
     * Adding a new booking
     */
    function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

		
		if($this->form_validation->run() === false){
            $this->load->view('templates/header');
            $this->load->view('bookings/create');
            $this->load->view('templates/footer');
        }
        else{
            //form needs to be processed

            //use model to send post data from form
            $data['bookingID'] = $this->bookings_model->create_booking();
            
            $this->load->view('templates/header');
            //to do: load the form process view (bookings/create)
            $this->load->view('templates/footer');        
            
        }
    }  

    /*
     * Editing a booking
     */
    public function update($id = false) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        //load header template
        $this->load->view('templates/header');

        if($id != false){
        $data['bookings'] = $this->Bookings_model->get_bookings(urldecode($id));
       
        $this->form_validation->set_rules('required');

       
        
        if($this->form_validation->run() === false){
            $this->load->view('bookings/create');
           
        }
        else{ 
            
            $this->load->view('bookings/update');
        }
    }
    else{
        $data['message'] = "Failed to update booking. Booking may not exist."
        $this->load->view('bookings/update', $data);
    }
    //load template footer
    $this->load->view('templates/footer');
}

    /*
     * Deleting booking
     */
    public function delete($id = false) {
        $this->load->helper('url');
        $this->Bookings_model->delete_booking(urldecode($id));
        redirect('bookings');
        $this->load->view('templates/header');
        $this->load->view('bookings/delete');
        $this->load->view('templates/footer');
    }
      
}