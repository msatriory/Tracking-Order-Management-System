<?php

class Muser extends CI_Model {
  function __construct()
    {
        // Call the Model constructor
        //parent::__construct();
        $this->load->database();
    }
    
    public function cek($data)
    {
      $query=$this->db->where('NIK', $data['NIK']);
      $query=$this->db->where('password', $data['password']);
      $query=$this->db->get('userinputer');  
      return $query->result_array();
    } 

    // public function get_name($data)
    // {
    //   $query="Select nama, NIK from userinputer where NIK='$data'";

    //   return $this->db->query($query)->result_array();
    // }
}

?>

