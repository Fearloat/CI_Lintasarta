<?php

class admin_model extends CI_Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('admin');
		
		if($query->num_rows == 1)
		{
                    return true;
		}	
	}
        
        function check($user,$pass)
        {
                $this->db->where('password', md5($pass));
                $this->db->where('userid',$user);
                $query = $this->db->get('costumer');
                
                if($query->num_rows == 1) 
                { 
                return TRUE; 
                } 
            	
	}
        
        
}