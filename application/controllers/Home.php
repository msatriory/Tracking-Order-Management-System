<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska');
        $this->load->model('Muser');
        $this->load->library('grocery_CRUD');
        $this->load->library('user_agent');
    $this->load->helper('url');
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
		if(!isset($_SESSION['NIK'])){
		$this->load->view('Viewtoms2');
		
		$crud = new grocery_CRUD();
        $crud->set_table('isiska');
        $crud->where('Status','progress');
        $crud->order_by('No','desc');
		$crud->display_as('Cust_Name','Name');	
		$crud->set_field_upload('File_Contract','uploads');
		$crud->unset_add();
		$crud->unset_edit();
		$output= $crud->render();
		$this->load->view('isiskaprogress', $output);

				
		$crud2 = new grocery_CRUD();
        $crud2->set_table('isiska');
        $crud2->where('Status','Closed');
        $crud2->order_by('No','desc');
		$crud2->display_as('Cust_Name','Name');	
		$crud2->set_field_upload('File_Contract','uploads');
		$crud2->unset_add();
		$crud2->unset_edit();
		$output= $crud2->render();
		$this->load->view('isikaclosed', $output);

		$crud3 = new grocery_CRUD();
        $crud3->set_table('ticares');
        $crud3->where('Ticares_Status','In Process');
        $crud3->order_by('No','desc');
		$crud3->display_as('Cust_Name','Name');
		$crud3->display_as('Cust_Ship','Alamat');
		$crud3->unset_add();
		$crud3->unset_edit();
		$output= $crud3->render();
		$this->load->view('ticaresprogress', $output);	


		$crud4 = new grocery_CRUD();
        $crud4->set_table('ticares');
        $crud4->where('Ticares_Status','Prov. Complete');
        $crud4->order_by('No','desc');
		$crud4->display_as('Cust_Name','Name');
		$crud4->display_as('Cust_Ship','Alamat');
		$crud4->unset_add();
		$crud4->unset_edit();
		$output= $crud4->render();
		$this->load->view('ticaresclosed', $output);
		
        
        
        
        
 
		
		
		
		
		
		}
		else{
		redirect('ViewData');
		}	
	}

	public function do_login()
	{
		$data['NIK'] = $_POST['NIK'];
        $data['password'] = $_POST['password'];
        $data= array('NIK' =>  $_POST['NIK'],'password'=>$_POST['password'] );
        print_r($data);
        $this->session->set_userdata($data);
        $hasil= $this->Muser->cek($data);
        if (sizeof($hasil)==1)
        {
           //redirect ('login/isiformulir');     
           echo "login sukses";
           redirect('ViewData');      
        }
        else 
        {
            $this->load->view('Home/index');
        }
	}

	public function do_logout()
	{
        $this->session->unset_userdata('NIK');
		$this->session->unset_userdata('password');
		$this->session->sess_destroy();

		redirect('Home/index','refresh');
        
	}
}
