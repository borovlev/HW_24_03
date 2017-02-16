<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Форма</title>
 </head>
 
 <body>
	<form action="31.php" method="post">
		<p>User name</p>
		<input type="text" name="name"/>
		<p>Email</p>
		<input type="text" name="email"/> 
		<p>Message</p>
		<input type="text" name="message"/>
		<input type="submit"/>
	</form>
	</body>
	
</html>

<?php
	echo $str  = serialize($_POST);
?>