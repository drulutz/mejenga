<?php 
header('Content-Type: text/html; charset=UTF-8');
// MySQL Variables
$sql_host = "mysql.hostinger.es";
$sql_user = "u977297047_mejen";
$sql_password = "Vaquero10";
$sql_db = "u977297047_mejen";

$con = mysqli_connect($sql_host, $sql_user, $sql_password, $sql_db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
	$jose = "Jose te amo";
}

$result = mysqli_query($con, "SELECT * FROM `usuarios` WHERE ((`usuarios`.`id` = 1))");
$row=mysqli_fetch_array($result);
$nombre = $row['username'];
$password = $row['password'];
$email = $row['email'];
$edad = $row['edad'];
  
?>

<html>
<head>
<title> Mejenga App </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="jose">
<?php echo $jose; ?>
</h1>
<p class="luis">
Eso es lo que pasa, <?php echo $nombre . "de edad: ". $edad . "años. Con tu password: " . $password . " y con el correo: " . $email; ?>.
</p>
</body>
</html>
