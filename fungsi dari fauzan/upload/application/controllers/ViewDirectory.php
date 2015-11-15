<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewDirectory extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Isiska');
        $this->load->helper('directory');
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
		$this->load->helper('directory');
		$dir_map = directory_map('./uploads/'); // returns array with content of the folder
		//dump($dir_map); // returns array('1'=>'index.php','2'=>'style.css')
		$dir_map = directory_map('./uploads/', 2); // return content of the folder with 2 levels deep
		$dir_map = directory_map('./uploads/', FALSE, TRUE); // return content of the folder with hidden files
		//print_dir($dir_map,0);
		$this->load->view('files2',$dir_map);
	}
}