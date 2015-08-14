<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska');
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

		$isiska = $this->Isiska->Listdata();
		
		//$this->load->view('ViewData',$isiska);
	$this->load->view('tables',$isiska);
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
}