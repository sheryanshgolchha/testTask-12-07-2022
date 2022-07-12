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

	public function Two(){
		$db = $this->db->query('select count(*) as cnt from users where is_active=1 and is_verified=1 and id in (select user_id from user_product where product_id in (select product_id from products where status=1))');
		$result = $db->result()[0];
		return $result;
	}

	public function Three(){
		$this->db->select('count(*) as cnt');
		$this->db->from('products');
		$this->db->where('status', 1);
		$result = $this->db->get()->row();
		return $result;
	}

	public function Four(){
		$db = $this->db->query('select count(*) as cnt from products where id not in (select product_id from user_product) and status=1');
		$result = $db->result()[0];
		return $result;
	}

	public function Five(){
		$db = $this->db->query('select sum(quantity) as cnt from user_product where product_id in (select id from products where status=1)');
		$result = $db->result()[0];
		return $result;
	}

	public function Six(){
		$db = $this->db->query('select sum(quantity*price) as cnt from user_product where product_id in (select id from products where status=1)');
		$result = $db->result()[0];
		return $result;
	}

}

?>