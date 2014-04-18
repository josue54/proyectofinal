<!DOCTYPE html>
<html>
<head>
	<?php
      echo anchor(base_url().'index.php/blog/entry/', 'New Entry');
      echo ' | ';
      echo anchor(base_url(), 'All Entries');
   ?>
	<title><?php echo $title; ?></title>

</head>
<body>

	<ol>

<?php if (isset($query)) { ?>
  <?php foreach($query->result() as $row): ?>

   <h3><?php echo $row->title ?></h3>

   <p><?php echo $row->text ?></p>


<p><?php echo anchor('blog/comments/'.$row->id, 
   'Comments'); ?></p>

   <hr />

      

<?php endforeach; ?>
<?php }?>

</ol>

</body>
</html>