<!DOCTYPE html>
<html>
<head>
<title align="center">Blogger Edition</title>

<style type="text/css">

  ::selection{ background-color: #E13300; color: white; }
  ::moz-selection{ background-color: #E13300; color: white; }
  ::webkit-selection{ background-color: #E13300; color: white; }

  body {
    background-color: #fff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }

  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
  }

  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }

  code {
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 12px;
    background-color: #f9f9f9;
    border: 1px solid #D0D0D0;
    color: #002166;
    display: block;
    margin: 14px 0 14px 0;
    padding: 12px 10px 12px 10px;
  }

  #body{
    margin: 0 15px 0 15px;
  }
  
  p.footer{
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }
  
  #container{
    margin: 10px;
    border: 1px solid #D0D0D0;
    -webkit-box-shadow: 0 0 8px #D0D0D0;
  }
  </style>

  
	<?php
      echo anchor(base_url().'index.php/blog/entry/', 'New Entry');
      echo ' | ';
      echo anchor(base_url(), 'All Entries');
      echo ' | ';
      echo anchor(base_url().'index.php/blog/load_profile/', 'Profile');
   ?>
	<title><?php echo $title; ?></title>

</head>
<body>

	<ol>

<?php if (isset($query)) { ?>
  <?php foreach($query->result() as $row): ?>

   <h3 align="center">Edicion De Mis Datos</h3>

   <input align="middle" type="text"     value=<?php echo $row->id ?> name="nombre">

   <input align="middle" type="text"     value=<?php echo $row->nombre ?> name="nombre">

   <input align="middle" type="text"     value=<?php echo $row->email ?> name="nombre">

   <input align="middle" type="text"     value=<?php echo $row->facebook ?> name="nombre">

   <input align="middle" type="text"     value=<?php echo $row->hobbies ?> name="nombre">

   <input align="middle" type="text"     value=<?php echo $row->blog_name ?> name="nombre">

   <textarea align="center" name="comentarios" rows="10" cols="40"> <?php echo $row->detalles ?></textarea>

   <hr />

      

<?php endforeach; ?>
<?php }?>

</ol>

</body>
</html>