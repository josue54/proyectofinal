<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('class.phpmailer.php');//importa la clase php mailer
require('class.smtp.php');//importo el servidor para autenticar

class Blog extends CI_Controller {

 public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');
                $this->load->model('blogger_model');
                $this->load->model('user_model');                   
        }

   function index()
   {
    
      

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

  function Commentstodelete()
 {
   
   $data['title'] = "Comments";
   $data['h1'] = "Comments";
   $this->db->where('entry_id', $this->uri->segment(3));
   $data['query'] = $this->db->get('comments');
   $this->load->view('deletecomment_view.php', $data);

 }

function comment_insert(){

$this->sendmail();
$this->blog_model->insert_comment('comments', $_POST);
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



public function load_profile(){
$data['query'] = $this->blogger_model->get_data();
$this->load->view('bloggerProfile_view.php', $data);

}

public function editentries(){
 $data['query'] = $this->db->get('entries');
$this->load->view('entriesEdit_view.php', $data);

}

public function data_edition(){
 $data['query'] = $this->blogger_model->get_data();
$this->load->view('profileEdit_view.php',$data);

}

public function edit_blogerdata(){
 $newdata = array(
                        'id' => $this->input->post('id_edit'),
                        'nombre' => $this->input->post('name_edit'),
                        'email' => $this->input->post('email_edit'),
                        'facebook' => $this->input->post('facebook_edit'),
                        'hobbies' => $this->input->post('hobbies_edit'),
                        'blog_name' => $this->input->post('blogname_edit'),
                        'detalles' => $this->input->post('detalle_edit')
                        );
                
                $this->blogger_model->update_blogerdata($newdata);
                echo"datos actualizados";
                redirect(base_url().'index.php/blog/data_edition/');
}



 function deletecomment()
 {
   
   $this->db->delete('comments', array('id' => $this->uri->segment(3))); 
   redirect(base_url().'index.php/blog/editentries/');

 }



  function deletepost()
 {
   
   $this->db->delete('entries', array('id' => $this->uri->segment(3))); 
   redirect(base_url().'index.php/blog/editentries/');

 }



public function sendmail(){
$mail = new PHPMailer();

$body = "han comentando un post del blog";

$mail->IsSMTP(); 

// la dirección del servidor, p. ej.: smtp.servidor.com
$mail->Host = "www.gmail.com";

// dirección remitente, p. ej.: no-responder@miempresa.com
$mail->From = "jraabarca@gmail.com";

// nombre remitente, p. ej.: "Servicio de envío automático"
$mail->FromName = "jraabarca@gmail.com";

// asunto y cuerpo alternativo del mensaje
$mail->Subject = "nuevo comentario ";
$mail->AltBody = " "; 

// si el cuerpo del mensaje es HTML
$mail->MsgHTML($body);

// podemos hacer varios AddAdress
$mail->AddAddress("jraabarca@gmail.com","jraabarca@gmail.com");

// si el SMTP necesita autenticación
$mail->SMTPAuth = true;
$mail->Mailer = 'smtp';  $mail->Host = 'ssl://smtp.gmail.com';   $mail->Port = 465;
// credenciales usuario
$mail->Username ="jraabarca@gmail.com";
$mail->Password = "101700qaz";

  if(!$mail->Send()) {
    echo "Error enviando: " . $mail->ErrorInfo;
    } else {

    }

}





}

?>