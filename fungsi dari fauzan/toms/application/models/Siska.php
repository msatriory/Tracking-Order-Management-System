<?php
/*
 
 
 */

class Siska extends CI_Model {
    
    public function setDataSiska($data)
    {
        $this->db->insert('i-siska',$data);
    }

 }

?>