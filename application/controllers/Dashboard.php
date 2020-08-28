<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent :: __construct();
        $this->load->model('dashboard_model');
    }

    function index(){
		$this->load->view('header');
		$this->load->view('dashboard/new_ticket');
		$this->load->view('footer');
    }

    function add_ticket(){
    	$ticket_details = array('department' => $_POST['department'],'category' => $_POST['category'],
    		'pro_url' => $_POST['pro_url'],'subject' => $_POST['subject'],'description' => $_POST['description'],'user_id' => $this->session->userdata('id'),'phone' => $_POST['phone'],'priority' => $_POST['priority'],
    		'status' => 'Open');
    	$result = $this->dashboard_model->create_ticket($ticket_details);
    	if($result==true){
			$this->session->set_flashdata('success','Ticket created successfully');
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('failed','Failed try again');
			redirect('dashboard');
		}
    }

    function ticket_list(){
    	$temp['ticket_result'] = $this->dashboard_model->get_ticket_list();
    	$this->load->view('header');
    	$this->load->view('dashboard/ticket_list',$temp);
    	$this->load->view('footer');
    }
    
    
}
?>