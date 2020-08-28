<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

	public function create_ticket($data){
		$this->db->insert('tickets',$data);
		$row=$this->db->affected_rows();
		if($row>0){
			return true;
		}else{
			return false;
		}
	}

	public function get_ticket_list(){
		return $this->db->select('*')->from('tickets t')
		->join('users u','u.id=t.user_id')
		->get()->result_array();
	}
	
}

?>