<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manage_anggota extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->library(array('form_validation','table'));
        $this->load->model('manage_modela');
        $this->is_logged_in();
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
    
    function index()
    {
        $data_tpl = array();
                $list =  $this->manage_modela->get_list();
		//echo '<pre>'.$list->num_rows;print_r($list);
		
		$this->table->add_row(
			anchor(site_url('manage_anggota/add'), '<button type="button" class="btn btn-primary">Add New</button>').'&nbsp;'
		);
		$data_tpl['nav'] = $this->table->generate();
		
		$this->table->set_heading('ID', 'Nama', 'Jabatan', 'Pekerjaan','Hubungan','Periode','<center>Action</center>');
                
		foreach($list->result() as $row)
		{
                        $action = anchor(site_url('manage_anggota/edit/'.$row->id_anggota), '<center><button type="button" class="btn btn-success">Edit</button>').'&nbsp;';
			$action .= anchor(site_url('manage_anggota/delete/'.$row->id_anggota), '<button onClick="return doconfirm();" type="button" class="btn btn-danger">Delete</BUTTON></center>');
			$this->table->add_row($row->id_anggota, $row->nama, $row->jabatan, $row->pekerjaan, $row->hub, $row->periode, $action );
		}
		
		$data_tpl['list'] = $this->table->generate();

		$data_tpl['content'] = 'hoho';
		$this->load->view('manage_viewa', $data_tpl);
    }
    
    public function edit()
	{
        
		$data_tpl = array();
                $asc_arr = $this->uri->uri_to_assoc(2);
		$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
		$data['select_options'] = $this->manage_modela->getperusahaan();
                $row = $this->manage_modela->get_list($id);
                
                $this->form_validation->set_rules('id_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('hub', 'Hubungan', 'required');
		$this->form_validation->set_rules('periode', 'Periode', 'required|numeric');
                
		if ($this->form_validation->run())
		{
			$data = array(
                                'id_perusahaan' =>$this->input->post('id_perusahaan'),
				'nama'=>$this->input->post('nama'),
				'jabatan'=>$this->input->post('jabatan'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'hub'=>$this->input->post('hub'),
                                'periode'=>$this->input->post('periode')
			);
			
			$result = $this->manage_modela->edit($id, $data);
			
			if ($result) redirect(site_url('manage_anggota'), 'refresh');
		}
		
		$data['row'] = $row->row();
		
		//$this->load->view('manage_form_viewa',$data_tpl);
                $this->load->view('manage_form_viewa', $data);
	}
    
        public function add()
	{
                
                $data = array();
                $this->load->helper('array');
                $data['select_options'] = $this->manage_modela->getperusahaan();
                $this->load->model('manage_modela');
                //$data['hasil'] = $this->manage_modela->getanggota();
                //$this->load->view('manage_form_viewa', $data);
                
		

		$this->form_validation->set_rules('id_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('hub', 'Hubungan', 'required');
		$this->form_validation->set_rules('periode', 'Periode', 'required|numeric');
		
		if ($this->form_validation->run())
		{
                    $data = array(
                                'id_perusahaan' =>$this->input->post('id_perusahaan'),
				'nama'=>$this->input->post('nama'),
				'jabatan'=>$this->input->post('jabatan'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'hub'=>$this->input->post('hub'),
                                'periode'=>$this->input->post('periode')
			);
			
			$result = $this->manage_modela->add($data);

			if ($result) redirect(site_url('manage_anggota'), 'refresh');
		}
		//kalo di ifnya error ini yang dicari
		$this->load->view('manage_form_viewa', $data);
	}
        
        public function delete()
	{
		$asc_arr = $this->uri->uri_to_assoc(2);
		$id = (isset($asc_arr['delete'])) ? $asc_arr['delete'] : '';
                $result = $this->manage_modela->delete($id);

		redirect(site_url('manage_anggota'), 'refresh');
	}
    
}