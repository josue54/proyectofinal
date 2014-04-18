<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

 public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');              
        }

   function index()
   {
    
      $data['title'] = "Blog";

      $data['h1'] = "Welcome to my blog!";

      $data['list'] = array('first', 'second', 'third');

      $data['query'] = $this->db->get('entries');

      $this->load->view('blog_view.php', $data); 
  }

 function Comments()
 {
   
   $data['title'] = "Comments";
   $data['h1'] = "Comments";
   $this->db->where('entry_id', $this->uri->segment(3));
   $data['query'] = $this->db->get('comments');
   $this->load->view('comment_view.php', $data);
 }

function comment_insert(){

$this->db->insert('comments', $_POST);
redirect('blog/comments/'.$_POST['entry_id']);
}

public function insert_entry(){
                $entry = array(
                        'title' => $this->input->post('title'),
                        'text' => $this->input->post('text')
                        );

                $this->blog_model->insert('entries', $entry);
                redirect(base_url());
        }



public function entry(){
                $this->load->view('new_entry');
        }

}

?>