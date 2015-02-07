<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manage extends CI_Controller 
{
    function __construct ()
    {
        parent::__construct();
        $this->load->library(array('form_validation','table'));
        $this->load->model('manage_modelp');  
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
    
    public function index()
    {
        
        $data_tpl = array();
                $list =  $this->manage_modelp->get_list();
		//echo '<pre>'.$list->num_rows;print_r($list);
		
		$this->table->add_row(
			anchor(site_url('manage/add'), '<button type="button" class="btn btn-primary">Add New</button>').'&nbsp;'
		);
		$data_tpl['nav'] = $this->table->generate();
		
		$this->table->set_heading('ID', 'Nama', 'Alamat', 'Jenis Sewa','Nomor Jaringan','Lokasi','<center>Action</center>');

		foreach($list->result() as $row)
		{
			$action = anchor(site_url('manage/edit/'.$row->id_perusahaan), '<center><button type="button" class="btn btn-success">Edit</button>').'&nbsp;';
			$action .= anchor(site_url('manage/delete/'.$row->id_perusahaan), '<button onClick="return doconfirm();" type="button" class="btn btn-danger">Delete</BUTTON></center>');
			$this->table->add_row($row->id_perusahaan, $row->nama_perusahaan, $row->alamat, $row->jenis_sewa, $row->nojar,$row->lokasidc, $action );
		}
		
		$data_tpl['list'] = $this->table->generate();

		$data_tpl['content'] = 'hoho';
		$this->load->view('manage_viewp', $data_tpl);
    }
    
    public function edit()
	{
		$data_tpl = array();
		
		$asc_arr = $this->uri->uri_to_assoc(2);
		$id = (isset($asc_arr['edit'])) ? $asc_arr['edit'] : '';
			
		$row = $this->manage_modelp->get_list($id);

		$this->form_validation->set_rules('nama_perusahaan', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jenis_sewa', 'Jenis Sewa', 'required');
		$this->form_validation->set_rules('nojar', 'Nomor Jaringan', 'required|numeric');
		$this->form_validation->set_rules('lokasidc', 'Lokasi', 'required|max_length[1]|numeric');
                
		if ($this->form_validation->run())
		{
			$data = array(
				'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
				'alamat'=>$this->input->post('alamat'),
				'jenis_sewa'=>$this->input->post('jenis_sewa'),
				'nojar'=>$this->input->post('nojar'),
                                'lokasidc'=>$this->input->post('lokasidc')
			);
			
			$result = $this->manage_modelp->edit($id, $data);
			
			if ($result) redirect(site_url('manage'), 'refresh');
		}
		
		$data_tpl['row'] = $row->row();
		
		$this->load->view('manage_form_viewp', $data_tpl);
	}
       
        
    public function add()
	{
		$data_tpl = array();

		$this->form_validation->set_rules('nama_perusahaan', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jenis_sewa', 'Jenis Sewa', 'required');
		$this->form_validation->set_rules('nojar', 'Nomor Jaringan', 'required|numeric');
		$this->form_validation->set_rules('lokasidc', 'Lokasi', 'required|max_length[1]|numeric');
		
		if ($this->form_validation->run())
		 {
                        $data = array(
				'nama_perusahaan'=>$this->input->post('nama_perusahaan'),
				'alamat'=>$this->input->post('alamat'),
				'jenis_sewa'=>$this->input->post('jenis_sewa'),
				'nojar'=>$this->input->post('nojar'),
                                'lokasidc'=>$this->input->post('lokasidc')
			);
                 
			
			$result = $this->manage_modelp->add($data);

			if ($result) redirect(site_url('manage'), 'refresh');
		}
		$this->load->view('manage_form_viewp', $data_tpl);
	}
        
   public function delete()
	{
		$asc_arr = $this->uri->uri_to_assoc(2);
		$id = (isset($asc_arr['delete'])) ? $asc_arr['delete'] : '';
                $result = $this->manage_modelp->delete($id);

		redirect(site_url('manage'), 'refresh');
	}
        
   public function view()
        {       
                $data_tpl = array();
                $asc_arr = $this->uri->uri_to_assoc(2);
		$id = (isset($asc_arr['view'])) ? $asc_arr['view'] : '';
                $list =  $this->manage_modelp->getang($id);
                
                $data_tpl['nav'] = '<center>Anggota</center>';
                $this->table->set_heading('ID anggota','Nama Perusahaan','Nama', 'Jabatan','Pekerjaan','Hubungan','Periode');
                foreach($list->result() as $row)
		{
			$this->table->add_row($row->id_anggota,$row->nama_perusahaan, $row->nama, $row->jabatan, $row->pekerjaan,$row->hub, $row->periode );
		}
                $data_tpl['list'] = $this->table->generate();
                $data_tpl['content'] = 'hoho';
                $this->load->view('showanggota',$data_tpl);
        }
     
}