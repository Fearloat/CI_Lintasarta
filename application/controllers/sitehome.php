<?php

class sitehome extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->is_logged_in();   
                $this->load->library('session');
        }
                
            
        function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
                        echo 'You don\'t have permission to access this page.';
                        echo anchor('home','login');		
			die();		
			//$this->load->view('login_form');
		}		
	}
        
        function user_area ()
        {
            $userid['userid'] = $this->session->userdata('userid');
            $this->load->helper('array');
            $this->load->view('user_area',$userid); 
            
        }
        
        function booking_area()
        {
            //blum aktif kecuali datepickernya
            $this->load->library('form_validation');
            $this->load->model('model_booking');
            
            $data_tpl = array();
            
                $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		
                if ($this->form_validation->run())
		 {
                        $data = array(
                        'tanggal'=>$this->input->post('tanggal')
			);
                        
                 $result = $this->model_booking->add($data);

			if ($result) redirect(site_url('sitehome/booking_area'), 'refresh');
		}
		$this->load->view('view_booking', $data_tpl);
            
        }
        
        function test()
        {
            $this->load->model('model_booking');
            $userini = $this->session->userdata('userid');
            $data_tpl = array();
            $list =  $this->model_booking->ambil($userini); // ini bisa ambil hasil dari data sessio yang ada (dinamis)
            //$ajaib = $this->model_booking->belajar_gila($list); // ini ga bisa ambil data ID_perusahaan $list
            
            $data_tpl['nav'] = '<center>beneran gila</center>';
            $this->table->set_heading('');
            
            foreach($list->result() as $row)
		{
			$this->table->add_row($row->id_perusahaan);
		}
		
		$data_tpl['list'] = $this->table->generate();

		$data_tpl['content'] = 'hoho';
		$this->load->view('test2', $list);

            {
                
            }
        }
                
                
}

?>
