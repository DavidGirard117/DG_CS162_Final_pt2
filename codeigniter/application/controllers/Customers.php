<?php
class Customers extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customers_model');
    } 

    /*
     * Listing of customers
     */
    function index()
    {
        $data['customers'] = $this->Customers_model->get_customers(urldecode($id));
        
        $data['id'] = $id;
            $this->load->view('templates/header');
            $this->load->view('customers/view', $data);
            $this->load->view('templates/footer');
       
    }

    /*
     * Adding a new customer
     */
    function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

		$this->form_validation->set_rules('FirstName','First Name','required|max_length[35]');
		$this->form_validation->set_rules('LastName','Last Name','required|max_length[35]');
		
		
		if($this->form_validation->run() === false){
            $this->load->view('templates/header');
            $this->load->view('customers/create');
            $this->load->view('templates/footer');
        }
        else{
            //form needs to be processed

            //use model to send post data from form
            $data['customerID'] = $this->customers_model->create_customer();
            
            $this->load->view('templates/header');
            //to do: load the form process view (customers/create)
            $this->load->view('templates/footer');        
            
        }
    }  

    /*
     * Editing a customer
     */
    public function update($id = false) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        //load header template
        $this->load->view('templates/header');

        if($id != false){
        $data['customers'] = $this->Customers_model->get_customer(urldecode($id));
       
        $this->form_validation->set_rules('firstName', 'lastName', 'required');

       
        
        if($this->form_validation->run() === false){
            $this->load->view('customers/create');
           
        }
        else{ 
            
            $this->load->view('customers/update');
        }
    }
    else{
        $data['message'] = "Failed to update employee. Customer may not exist."
        $this->load->view('customers/update', $data);
    }
    //load template footer
    $this->load->view('templates/footer');
}

    /*
     * Deleting customer
     */
    public function delete($id = false) {
        $this->load->helper('url');
        $this->employees_model->delete_customer(urldecode($id));
        redirect('customers');
        $this->load->view('templates/header');
        $this->load->view('customers/delete');
        $this->load->view('templates/footer');
    }
      
}