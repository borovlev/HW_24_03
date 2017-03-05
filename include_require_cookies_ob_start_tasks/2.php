<?php

	function redirect($to)
{
    header("Location: {$to}");
    die;
}
	
	if ($_POST) {
		$value = 'что-то где-то';
		setcookie("TestCookie", $value, time()+20);		
		 redirect("./2.php");
			die;
	}
?>

<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP</title>
  <meta charset="utf-8">
  <style>
   p {
	border-style: solid;  
	border-color: red;
	border-width: 3px 7px 7px 4px;
	color: red;
   }
	</style>
 </head>
 <body>

	<h1>Form</h1>
	
	<form method="post">
		<h3>Name</h3>
		<input type="name" name="username"><br>
		<h3>Email</h3>
        <input type="email" name="email"><br>
		<?php
	   if (isset($_COOKIE['TestCookie'])) {
		  echo "<p>headers already sent</p>";
		} else {
		echo "<button>GO</button>";
		}
		?>
	</form>
 </body>
</html>