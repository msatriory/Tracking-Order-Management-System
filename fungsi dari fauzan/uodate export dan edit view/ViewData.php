<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska2');
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

		$isiska = $this->Isiska2->Listdata();
		
		//$this->load->view('ViewData',$isiska);
		$this->load->view('tables2',$isiska);
	}

	function get_tests() {
    $data = array('dor' => $this->mymodel->getStatus());
    
    $this->load->view('tables2', $data);
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
		$this->Isiska2->UpdateDataIsiska($data_siska);
		return true;
 
    endif;
	}

	function post_action()
	{
		$this->load->model('Isiska2');   

	    	//$jumlah = $_POST['jumlah'];
	    	//for($i=0 ; $i<$jumlah ; $i++){
            $No = $_POST['No'];
            $message['Cust_Name'] = $_POST['Cust_Name'];
	        $message['Cust_Ship'] = $_POST['Cust_Ship'];
	        $message['City'] = $_POST['City'];
	        $message['Customer_Segmen'] = $_POST['Customer_Segmen'];
	        $message['Product'] = $_POST['Product'];
	        $message['BW_Packet'] = $_POST['BW_Packet'];
	        $message['One_Time_Charge'] = $_POST['One_Time_Charge'];
	        $message['Abonemen'] = $_POST['Abonemen'];
	        $message['Sales_by'] = $_POST['Sales_by'];
	        $message['AM_Name'] = $_POST['AM_Name'];
	        $message['Status'] = $_POST['Status'];
	        $message['AM_Name'] = $_POST['AM_Name'];
	        $message['AM_Phone'] = $_POST['AM_Phone'];
	        $message['Customer_Phone'] = $_POST['Customer_Phone'];
	        $message['Contract_Date'] = $_POST['Contract_Date'];
	        $message['Due_Date_Live'] = $_POST['Due_Date_Live'];
	        $message['Tech_Data'] = $_POST['Tech_Data'];
	        $message['Input_Date'] = $_POST['Input_Date'];
	        $message['Speedy_Number'] = $_POST['Speedy_Number'];
	        $message['Date_of_Progress'] = $_POST['Date_of_Progress'];
	        $message['ISiska_Status'] = $_POST['ISiska_Status'];
	        $message['Tenoss_Status'] = $_POST['Tenoss_Status'];
	        $message['Status'] = $_POST['Status'];
	        $message['Additional_Information'] = $_POST['Additional_Information'];
	        $message['Date_of_Progress'] = $_POST['Date_of_Progress'];
	        $message['Follow_up'] = $_POST['Follow_up'];
	        $message['Unit_in_Charge'] = $_POST['Unit_in_Charge'];
	        $message['PIC_Name'] = $_POST['PIC_Name'];
	        $message['PIC_Number'] = $_POST['PIC_Number'];
	        $message['Put_in_Service_Date'] = $_POST['Put_in_Service_Date'];
	        $this->Isiska2->UpdateDataIsiska($No,$message);
	        redirect('ViewData');
	    
	    
	    echo $message;
	}

	
}