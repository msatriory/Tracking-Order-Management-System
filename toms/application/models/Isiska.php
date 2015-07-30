<?php

class Isiska extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    public function SetDataIsiska($data)
    {
    	
    	$this->load->database();
    	$this->db->insert('isiska',$data);
    }
    
    public function Listdata()
    {
    	$this->load->database();
    	$isiska['isiska']=$this->db->query("SELECT * from isiska order by No");
    	return $isiska;
    }
}

?>