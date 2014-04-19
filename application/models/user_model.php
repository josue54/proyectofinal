<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function get_user(){
		return $this->db->get("user");
	}



}
