<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska');
        $this->load->model('Muser');
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
		$this->load->view('Viewtoms2',$isiska);
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
        }
        else 
        {
            $this->load->view('Home/index');
        }
	}
}
