<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	
	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}
}
