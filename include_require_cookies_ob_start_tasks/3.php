<?php
/* Сделать выпадающий список со списком цветов (красный, синий, желтый и т.д.).
 После выбора цвета и отправки формы надо:
    1) запоминать цвет в cookies и выводить на странице текст Lorem Ipsum в выбранном цвете;
    2) если был выбран цвет, например, желтый, то при следующей загрузке страницы должен быть тоже выбран желтый в выпадающем списке.
	То есть, необходимо проставлять selected="seleted" для выбранного пункта в выпадающем списке. То есть, сохранять выбранное значение при перезагрузке страницы.
*/
$a = " ";
$b = " ";
$c = " ";
$d = " ";
function redirect($to)
{
    header("Location: {$to}");
    die;
}
	if ($_POST) {
		setcookie("ColorCookie", $_POST['color'], time()+20);
		Print_r ($_POST);
		print_r($_COOKIE);
		
		switch ($_COOKIE['ColorCookie']) {
    case "red":
        $a = "selected";
        break;
    case "blue":
         $b = "selected";
        break;
    case "yellow":
         $c = "selected";
        break;
	default:
        $d = "selected";
}

		redirect("./3.php");
	}
	// <? if($_COOKIE['ColorCookie'] == $_POST['color']): echo "selected";
?>

<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP</title>
  <meta charset="utf-8">
  <style>
  h3 {
	  color: <?=$_COOKIE['ColorCookie'] ?>;
  }
  </style>
 </head>
 <body>

	<h2>Form</h2>
	<form method="post">
<select name="color">
  <option value="red"<?=$a ?>>Красный</option>
  <option value="blue"<?=$b ?>>Синий</option>
  <option value="yellow"<?=$c ?>>Желтый</option>
  <option value="green" <?=$d ?>>Зеленый</option>
</select>
	<button>GO</button>
	</form>
	  <h3>Lorem Ipsum</h3>
 </body>
</html>