<?php

class manage_modelp extends CI_Model
{
        function __construct()
        {
		parent::__construct();
		$this->load->database();
        }
        
        public function get_list($id='')
	{
		if ($id)
                $this->db->where('id_perusahaan',$id);
                $this->db->order_by('nama_perusahaan');
                $query = $this->db->get('perusahaan');
		return $query;
                
	}
        //list di admin area
        public function get()
        {   
            $query = $this->db->query('select * FROM perusahaan order by nama_perusahaan asc');
            return $query;
        }
        
        public function getang($id='')
        {
                if($id)
                $this->db->select('t1.id_anggota,t2.nama_perusahaan,t1.nama,t1.jabatan,t1.pekerjaan,t1.hub,t1.periode');
                $this->db->from('anggota t1, perusahaan t2');
                $this->db->where('t1.id_perusahaan = t2.id_perusahaan');
                $this->db->where('t1.id_perusahaan',$id);
                $this->db->order_by('nama', 'asc'); 
                $query = $this->db->get();
                
                return $query;
                
        }
    
        public function add($data)
	{		
		$result = $this->db->insert('perusahaan', $data); 
		return $result;
	}
    
        public function edit($id='', $data)
	{
		$this->db->where('id_perusahaan', $id);
		
		$result = $this->db->update('perusahaan', $data); 

		return $result;
	} 
        
        public function delete($id='')
	{		
		$this->db->where('id_perusahaan', $id);
		$result = $this->db->delete('perusahaan'); 

		return $result;
	} 
     
}   
?>
