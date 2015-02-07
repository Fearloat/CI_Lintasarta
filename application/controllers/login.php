<?php

class Login extends CI_Controller {
	
	function index()
	{
        $data['main_content'] = 'login_form';
	$this->load->view('includes/template', $data);
        if( $this->session->userdata('is_Logged_In') ) {
            redirect('site/admin_area');
        }
        }
        
        //fungsi baru eror//
        function show_login( $show_error = false ) 
        {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login_form',$data);
        }
	
	function validate_credentials()
	{		
		$this->load->model('admin_model');
		$query = $this->admin_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('site/admin_area');
		}
		else // incorrect username or password
		{
                $this->show_login(TRUE);
                //$this->index();
		}
	}	
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}