<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogger_model extends CI_Model {

	
	public function get_data(){
		return $this->db->get("blogger");
	}


  



}
