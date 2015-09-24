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

	function get_tests() {
    $data = array('dor' => $this->mymodel->getStatus());
    
    $this->load->view('tables', $data);
	}


	function Updateisiska()
	{
		print "asasa";
		if($_POST):
 
        // do database stuff here to save the comment.
 
        // return false if db failed
 
        // else
		$Input_Date = $this->input->post('Input_Date');
    	$Speedy_Number = $this->input->post('Speedy_Number');
    	$Date_of_Progress = $this->input->post('Date_of_Progress');
    	$ISiska_Status = $this->input->post('ISiska_Status');
    	$Tenoss_Status = $this->input->post('Tenoss_Status');
    	$Status = $this->input->post('Status');
    	$Additional_Information = $this->input->post('Additional_Information');
    	$Follow_up = $this->input->post('Follow_up');
    	$Unit_in_Charge = $this->input->post('Unit_in_Charge');
    	$PIC_Name = $this->input->post('PIC_Name');
    	$PIC_Number = $this->input->post('PIC_Number');
    	$Put_in_Service_Date = $this->input->post('Put_in_Service_Date');
    	$data_siska = array (
    		'Input_Date' => $Input_Date,
	    	'Speedy_Number' => $Speedy_Number,
	    	'Date_of_Progress' => $Date_of_Progress,
	    	'ISiska_Status' => $ISiska_Status, 
	    	'Tenoss_Status' => $Tenoss_Status,
	    	'Status' => $Status,
	    	'Additional_Information' => $Additional_Information,
	    	'Follow_up' => $Follow_up,
	    	'Unit_in_Charge' => $Unit_in_Charge,
	    	'PIC_Name' => $PIC_Name,
	    	'PIC_Number' => $PIC_Number,
	    	'Put_in_Service_Date' => $Put_in_Service_Date
		);                    
    	die(var_dump($data_siska));
		$this->Isiska->UpdateDataIsiska($data_siska);
		return true;
 
    endif;
	}

	function post_action()
	{
		$this->load->model('Isiska');   
	    if($_POST['Status'] == "")
	    {
	    	//die(var_dump($message));
	        $message = "You can't send empty text";
	    }
	    else
	    {
	    	//$jumlah = $_POST['jumlah'];
	    	//for($i=0 ; $i<$jumlah ; $i++){
            $No = $_POST['No'];
	        $message = $_POST['Status'];
	        $this->Isiska->UpdateDataIsiska($No,$message);
	    
	    }
	    echo $message;
	}

	
}