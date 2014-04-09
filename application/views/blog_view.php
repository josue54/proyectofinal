<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $title; ?></title>

</head>
<body>

	<ol>

  <?php foreach($query->result() as $row): ?>

   <h3><?php echo $row->title ?></h3>

   <p><?php echo $row->text ?></p>


<p><?php echo anchor('blog/comments/'.$row->id, 
   'Comments'); ?></p>

   <hr />

      

<?php endforeach; ?>

</ol>

</body>
</html>