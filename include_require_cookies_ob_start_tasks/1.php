<?php

	function redirect($to)
{
    header("Location: {$to}");
    die;
}
	
	if ($_POST) {
		$value = 'что-то где-то';
		setcookie("TestCookie", $value, time()+20);		
		 redirect("./1.php");
			die;
	}

?>

<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP</title>
  <meta charset="utf-8">
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
		   
		} else {
		echo "<button>GO</button>";
		}
		?>
	</form>
 </body>
</html>