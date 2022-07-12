<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model{

	public function One(){
		$this->db->select('count(*) as cnt');
		$this->db->from('users');
		$this->db->where('is_active', 1);
		$this->db->where('is_verified', 1);
		$result = $this->db->get()->row();
		return $result;
	}

}

?>