<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertData extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Isiska');
        $this->load->helper('form');
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
		$this->load->view('InsertData');

	}

    function isiska()
    {
    	$this->load->helper('url');
        $this->load->model('Isiska');
        $this->load->helper('form');
    	print "asasa";
    	$Cust_Name = $this->input->post('Cust_Name');
    	$Cust_Ship = $this->input->post('Cust_Ship');
    	$City = $this->input->post('City');
    	$Customer_Segmen = $this->input->post('Customer_Segmen');
    	$Product = $this->input->post('Product');
    	$BW_Packet = $this->input->post('BW_Packet');
    	$One_Time_Charge = $this->input->post('One_Time_Charge');
    	$Abonemen = $this->input->post('Abonemen');
    	$Sales_by = $this->input->post('Sales_by');
    	$AM_Name = $this->input->post('AM_Name');
    	$AM_Phone = $this->input->post('AM_Phone');
    	$Customer_Name = $this->input->post('Customer_Name');
    	$Customer_Phone = $this->input->post('Customer_Phone');
    	$Contract_Date = $this->input->post('Contract_Date');
    	$Due_Date_Live = $this->input->post('Due_Date_Live');
    	$Tech_Data = $this->input->post('Tech_Data');
    	//start of file upload code
    			//$new_name = rename("$_FILES['userfile']['name']", "$Cust_Name")
				//$config['file_name'] = $new_name;
    			$path = "./uploads/$Cust_Name";

			    if(!is_dir($path)) //create the folder if it's not already exists
			    {
			      mkdir($path,0755,TRUE);
			  	}

                $config['upload_path'] = "$path";
                $config['allowed_types'] = 'pdf|gif|jpg|jpeg|png|zip|rar|doc';
                $extention = pathinfo($_FILES["userfile"]["name"] ,PATHINFO_EXTENSION);
				$new_name = "Contract-" . "$Contract_Date-" . "$Cust_Name." . $extention ;
				var_dump($new_name);
				$config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                //$this->upload->do_upload();
                //$dataupload = $this->upload->data();
                if($this->upload->do_upload())
				{
					$data = array('upload_data' => $this->upload->data());
           // $new_data='Cust_Name'+'.pdf';
            //$new_imgpath=$img_data['file_path'].$new_imgname;
            //rename($img_data['full_path'], $new_imgpath);


					$this->load->view('upload_success',$data);
				}
                else
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('file_view', $error);
				}
                //end of file upload code
    	$data_siska = array (
    		'Cust_Name' => $Cust_Name,
	    	'Cust_Ship' => $Cust_Ship,
	    	'City' => $City,
	    	'Customer_Segmen' => $Customer_Segmen, 
	    	'Product' => $Product,
	    	'BW_Packet' => $BW_Packet,
	    	'One_Time_Charge' => $One_Time_Charge,
	    	'Abonemen' => $Abonemen,
	    	'Sales_by' => $Sales_by,
	    	'AM_Name' => $AM_Name,
	    	'AM_Phone' => $AM_Phone,
	    	'Customer_Name' => $Customer_Name,
	    	'Customer_Phone' => $Customer_Phone,
	    	'Contract_Date' => $Contract_Date,
	    	'Due_Date_Live' => $Due_Date_Live,
	    	'Tech_Data' => $Tech_Data
	    	//'dataupload'=> $dataupload
		);                    

		$this->Isiska->SetDataIsiska($data_siska);
    }

}