<?php
class Employees extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Employees_model');
    } 

    /*
     * Listing of employees
     */
    function index()
    {
        $data['employees'] = $this->Employees_model->get_employees(urldecode($id));
        
        $data['id'] = $id;
            $this->load->view('templates/header');
            $this->load->view('employees/view', $data);
            $this->load->view('templates/footer');
       
    }

    /*
     * Adding a new employee
     */
    function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

		$this->form_validation->set_rules('FirstName','First Name','required|max_length[35]');
		$this->form_validation->set_rules('LastName','Last Name','required|max_length[35]');
		$this->form_validation->set_rules('Title','Title','required|max_length[35]');
		
		if($this->form_validation->run() === false){
            $this->load->view('templates/header');
            $this->load->view('employees/create');
            $this->load->view('templates/footer');
        }
        else{
            //form needs to be processed

            //use model to send post data from form
            $data['employeeName'] = $this->employees_model->create_employee();
            
            $this->load->view('templates/header');
            //to do: load the form process view (employees/create)
            $this->load->view('templates/footer');        
            
        }
    }  

    /*
     * Editing a employee
     */
    public function update($id = false) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        //load header template
        $this->load->view('templates/header');

        if($id != false){
        $data['employees'] = $this->Employees_model->get_employees(urldecode($id));
       
        $this->form_validation->set_rules('firstName', 'lastName', 'title', 'required');

       
        
        if($this->form_validation->run() === false){
            $this->load->view('employees/create');
           
        }
        else{ 
            
            $this->load->view('employees/update');
        }
    }
    else{
        $data['message'] = "Failed to update employee. Employee may not exist."
        $this->load->view('employees/update', $data);
    }
    //load template footer
    $this->load->view('templates/footer');
}

    /*
     * Deleting employee
     */
    public function delete($id = false) {
        $this->load->helper('url');
        $this->employees_model->delete_employee(urldecode($id));
        redirect('employees');
        $this->load->view('templates/header');
        $this->load->view('employees/delete');
        $this->load->view('templates/footer');
    }
      
}