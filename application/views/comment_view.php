<!DOCTYPE html>
<html>
<head>
	<title align="center">Comments</title>
	

</head>
<body>

<?php echo form_open('blog/comment_insert'); ?>
<?php echo form_hidden('entry_id', 
   $this->uri->segment(3)); ?>

   <?php foreach($query->result() as $row): ?>
   <p><?php echo $row->author ?></p>
   <p><?php echo $row->text ?></p>        
   <hr />
<?php endforeach; ?>
<p><?php echo anchor('blog', 'Back to blog'); ?></p>

 <p><textarea name="text" rows="10"></textarea></p>
<p><input type="text" name="author" /></textarea></p>
<p><input type="submit" value="Submit" /></textarea></p>

</body>
</html>