<?php

class model_regis extends CI_Model 
{
    function construct()
    {
    parent::__construct();
    $this->load->database();
    
    }
    
    public function add()
	{	
        
            $result =array(
            'id_perusahaan'  => $this->input->post('id_perusahaan'),
            'userid'      => $this->input->post('userid'),
            'password'      => md5($this->input->post('password'))
            );
                
            $result1 = $this->db->insert('costumer', $result);
            return $result1;	
		
	}
    public function getnama()
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
