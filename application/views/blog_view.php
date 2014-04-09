<!DOCTYPE html>
<html>
<head>
	<title align="center">New Post</title>
	<title><?php echo $title; ?></title>

</head>
<body>

	<ol>

  <?php foreach($query->result() as $row): ?>

   <h3><?php echo $row->title ?></h3>

   <p><?php echo $row->text ?></p>

   <hr />

<?php endforeach; ?>

</ol>

</body>
</html>