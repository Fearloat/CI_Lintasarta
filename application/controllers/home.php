<?php

class home extends CI_Controller
{   
     
    function index()
	{
        $this->load->library('session');
	$this->load->view('login_user');
        }
        
        
        function show_login( $show_error = false ) 
        {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login_user',$data);
        }
        
       
        function validate_credentials()
	{	
                $this->load->model('admin_model');
		
                $user = $this->input->post('userid'); 
                $pass = $this->input->post('password'); 
		
                
                if($this->admin_model->check($user,$pass) == TRUE) 
                { 
                    $data = array(
                        'userid' => $user, 
                        'is_logged_in' => TRUE
                        ); 
                    $this->session->set_userdata($data); 
                    redirect('sitehome/user_area'); 
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
		redirect('home');
	}
        
        function about()
        {
            $this->load->view('about');
        }
        
        function contact()
        {
            $this->load->view('contact');
        }
        
}     
?>
