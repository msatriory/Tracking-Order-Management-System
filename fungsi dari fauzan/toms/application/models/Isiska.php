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

    public function UpdateDataIsiska($No, $updatedata)
    {
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');

        $data = array(
            'Status' => $updatedata
        );

        $this->db->where('No', $No);
        $this->db->update('isiska', $data); 
        //$this->db->update('isiska', $updatedatai);

    }

    public function index() {
        //load the helper library
        $this->load->helper('form');
        $this->load->helper('url');
        //Set the message for the first time
        //$data = array('msg' => "Upload File");
    
        //$data['upload_data'] = '';
    
        //load the view/upload.php with $data
        $this->load->view('ViewToms', $data);
    
        
    }
}

?>