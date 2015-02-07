<?php

class manage_modela extends CI_Model
{
        function __construct()
        {
		parent::__construct();
		$this->load->database();
        }
        
        public function get_list($id='')
	{       
		if ($id)
                
                $this->db->where('id_anggota',$id);
                $this->db->order_by('nama');
                $query = $this->db->get('anggota');
		return $query;
	}
        
        public function add($data)
	{		
		$result = $this->db->insert('anggota', $data); 

		return $result;
	}
    
        public function edit($id='', $data)
	{
		$this->db->where('id_anggota', $id);
		
		$result = $this->db->update('anggota', $data); 

		return $result;
	} 
        
        public function delete($id='')
	{		
		$this->db->where('id_anggota', $id);
		$result = $this->db->delete('anggota'); 

		return $result;
	} 
        
        public function getperusahaan()
        {
        $this->db->select('id_perusahaan');
        $this->db->select('nama_perusahaan');
        $this->db->from('perusahaan');
        $query = $this->db->get();
        foreach($query->result() as $row){
            $data[$row->id_perusahaan]= $row->nama_perusahaan;
        }
        return $data;
        }
     
}   
?>