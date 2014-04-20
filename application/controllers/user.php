<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

 public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');
                $this->load->model('blogger_model');
                $this->load->model('user_model');                     
        }

   function index()
   {
    
   }










public function autenticate(){
//$data['query'] = $this->blogger_model->get_data();
//$this->load->view('bloggerProfile_view.php', $data);
  $introuser = $this->input->post('username');
  $intropass = $this->input->post('password');
  $copiaverificar = md5($intropass);
 $data = $this->user_model->get_user();

 
  foreach ($data->result() as $row) {
  $clave= $row->password;
  $user= $row->user;
  }

  if(($copiaverificar==$clave)&&($introuser==$user)){
  redirect(base_url().'index.php/blog/data_edition/');

  }
  else{
  echo "datos de conexion invalidos";

  }

  
    
  

                        

}








}

?>