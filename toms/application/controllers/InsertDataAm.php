<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertDataAm extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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
		$this->load->view('FormAM');

	}


    function amanager()
    {
    	$NIK_AM = $this->input->post('NIK_AM');
    	$Nama_AM = $this->input->post('Nama_AM');
    	$phone_AM = $this->input->post('phone_AM');
    	$data_am = array (
    		'NIK_AM' => $NIK_AM,
	    	'Nama_AM' => $Nama_AM,
	    	'phone_AM' => $phone_AM
	    );
	    $this->Isiska->SetDataAm($data_am);
        $this->load->view('FormAM');
    }
}