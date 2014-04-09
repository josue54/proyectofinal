<?php



class Blog extends CI_Controller {


   function index()
   {
    
      $this->load->helper('url');
      $this->load->helper('form');

      $data['title'] = "Blog";

      $data['h1'] = "Welcome to my blog!";

      $data['list'] = array('first', 'second', 'third');

      $data['query'] = $this->db->get('entries');

      $this->load->view('blog_view.php', $data); 
  }

 function Comments()
 {
   $this->load->helper('url');
   $this->load->helper('form');
   $data['title'] = "Comments";
   $data['h1'] = "Comments";
$this->db->where('entry_id', $this->uri->segment(3));
$data['query'] = $this->db->get('comments');
   $this->load->view('comment_view.php', $data);
 }


 function comment_insert()
 {
   $this->load->helper('url');
   $this->load->helper('form');
   $this->db->insert('comments', $_POST);
   redirect('blog/comments/'.$_POST['entry_id']);
 }


}

?>