<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

	<ol>

   <?php foreach($list as $item): ?>

      <li>

         <?php echo $item; ?>

      </li>

   <?php endforeach; ?>

</ol>

</body>
</html>