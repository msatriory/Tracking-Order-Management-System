<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska');

         $this->load->library('grocery_CRUD');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$crud = new grocery_CRUD();
		// $crud->set_theme('bootstrap');
		// $crud->set_theme('datatables');
        $crud->set_table('isiska');
        $crud->where('Status','progress');
        $crud->order_by('No','desc');

		$crud->display_as('Cust_Name','Name');

		

        $output = $crud->render();
 
        //$this->_example_output($output);

		// $isiska = $this->Isiska->Listdata();
		
		//$this->load->view('ViewData',$isiska);
		$this->load->view('tables',$output);
	}

	public function on_progress()
	{
		$crud = new grocery_CRUD();
 
        $crud->set_table('isiska');
        $crud->where('Status','progress');
        $crud->order_by('No','desc');

        $output = $crud->render();
 
        $this->_example_output($output);
	}

	function post_action()
	{   
	    if($_POST['Status'] == "")
	    {
	        $message = "You can't send empty text";
	    }
	    else
	    {
	        $message = $_POST['Status'];
	    }
	    echo $message;
	}

	function _example_output($output = null)
    {
        $this->load->view('on_progress.php',$output);    
    }
}