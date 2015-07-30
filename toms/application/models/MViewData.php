<?php 

class MViewData extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function ListData()
	{
		$baca_data = $this->db->query("SELECT * from isiska order by No ");
		return $baca_data;
		/*
		if($baca_data_tes->num_rows() > 0)
		{
			foreach ($baca_data_tes->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}*/
	}
}
?>
