<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		p {white-space:pre;}
	</style>
</head>
<body>
	<?php
		$from = $_POST['from'];
		$to = $_POST['to'];
		$title = $_POST['title'];
		$msg = $_POST['msg'];
		mail($to, $title, $msg, 'From: '.$from);
	?>


	<p>Post name</p>
	<p><?php
		echo 
			"From : $from \n".
			"To : $to \n".
			"Title : $title\n".
			"Massage: $msg";
	?></p>
</body>
</html>
