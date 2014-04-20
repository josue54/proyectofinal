<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogger_model extends CI_Model {

	
	public function get_data(){
		return $this->db->get("blogger");
	}

  public function update_blogerdata($data){
    $this->db->set('nombre', $data['nombre']);
 $this->db->set('email', $data['email']);
 $this->db->set('facebook', $data['facebook']);
 $this->db->set('hobbies', $data['hobbies']);
 $this->db->set('blog_name', $data['blog_name']);
 $this->db->set('detalles', $data['detalles']);
 $this->db->where('id', $data['id']);
 $this->db->update('blogger');
 }

}
