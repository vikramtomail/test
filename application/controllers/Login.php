<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		$email_id = $this->input->post('email_id');
		$password = md5($this->input->post('password'));

		$user = $this->db->select('*')->from('users')->where(array('email_id'=>$email_id, 'password'=>$password))->get()->row();

		if(empty($user))
		{
			$this->session->set_flashdata('loginfail', "Invalid Credentials"); 
			redirect(base_url());
		}else
		{
			$session_data = array('id'=>$user->id, 'email_id'=>$user->email_id, 'name'=>$user->name);
			$this->session->set_userdata($session_data);
			redirect('dashboard');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}
?>