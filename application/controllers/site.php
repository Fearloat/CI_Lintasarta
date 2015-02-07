<?php

class Site extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
                $this->load->library(array('form_validation','table'));
	}

	function admin_area()
	{
            $this->load->model('manage_modelp');
            $data_tpl = array();
                $list =  $this->manage_modelp->get();
		
		$data_tpl['nav'] = '<center>Perusahaan</center>';
		$this->table->set_heading('Nama Perusahaan ','Alamat', 'Jenis Sewa','Nomor Jaringan','Lokasi','<center>Action</center>');

		foreach($list->result() as $row)
		{
			$action = anchor(site_url('manage/view/'.$row->id_perusahaan), '<center>
  				 <button type="button" class="demo btn btn-primary btn-small">view</button>').'&nbsp;';
			
			$this->table->add_row($row->nama_perusahaan, $row->alamat, $row->jenis_sewa, $row->nojar,$row->lokasidc, $action );
		}
		
		$data_tpl['list'] = $this->table->generate();

		$data_tpl['content'] = 'hoho';
		$this->load->view('logged_in_area', $data_tpl);
    
            //$this->load->view('logged_in_area');
	}
	
	
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
                        echo 'You don\'t have permission to access this page.';
                        echo anchor('login','login');		
			die();		
			//$this->load->view('login_form');
		}		
	}
        
        function booking()
        {
            $this->load->view('booking_area');
        }
        
        function perusahaan()
        {
            $this->load->model('manage_modelp');
            $this->load->view('manage_form_viewp');
        }
        
        function anggota ()
        {
            $this->load->model('manage_modela');
            $this->load->view('manage_form_viewa');
        }
        
        function regis()
        {   
            
            $this->load->helper('array');
            $this->load->model('model_regis');
            $data['select_options'] = $this->model_regis->getnama();
            $data['notif'] = 'data berhasil disimpan' ;
   
		$this->form_validation->set_rules('id_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('userid', 'User Name', 'required|min_length[5]|max_length[35]|is_unique[costumer.userid]');
		$this->form_validation->set_rules('password', 'Password', 'required');
          
		if ($this->form_validation->run())
		 {
                    
                        $result =  $this->model_regis->add();
                        if ($result) redirect(site_url('site/regis'), 'refresh');
		}
                 
                $this->load->view('regis_area', $data);
                
        }
        
}
