<?php

class Ticares extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function SetDataTicares($data)
    {
    	    	
    	$this->db->insert('ticares',$data);
    }
    
    public function Listdata()
    {
    	$this->load->database();
    	$ticares['ticares']=$this->db->query("SELECT * from ticares order by No");
    	return $ticares;
    }
}

?>