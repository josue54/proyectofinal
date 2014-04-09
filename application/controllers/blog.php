<?php 

class Blog extends CI_Controller {
   function index()
   {
      $data['title'] = "Blog";

      $data['h1'] = "Welcome to my blog!";

      $data['list'] = array('first', 'second', 'third');

      $this->load->view('blog_view.php', $data); 
   }
}

?>