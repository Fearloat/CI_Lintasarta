<?php

class model_booking extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function add($data)
	{		
		$result = $this->db->insert('booking', $data); 

		return $result;
	}
     
        function ambil($userini)
        {
            $this->db->select('id_perusahaan');
            $this->db->where('userid',$userini);
            $query2 = $this->db->get('costumer');
            return $query2;
    
        }
        
        function belajar_gila($list)
        {
           //$id_peru = 9;
            $this->db->select('nama');
            $this->db->where('id_perusahaan', $list);
            $query = $this->db->get('anggota');
            return $query;
        }
     
}
?>
