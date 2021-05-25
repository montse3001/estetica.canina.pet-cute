<?php
if (isset($_COOKIE['contador'])){
	setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
} else {
	setcookie('contador', 1, time()+365*24*60*60);
	echo "Bienvenido a nuestra página";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>COOKIE</title>
	<meta charset = "UTF-8" />
</head>
<body>

</body>
</html>