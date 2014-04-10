<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title align="center">New entry</title>
              
</head>
<body background="back.jpg">

        <?php include('blog_view.php');?>
        <?=form_open(base_url().'blog/insert_entry/')?>
        <p align="center">Title: <?=form_input('title')?></p>
        <p align="center">Text: <?=form_textarea('text')?></p>
        <center><?=form_submit('submit', 'Insert')?><center>
</body>
</html>
