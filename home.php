<?php 
session_start();

if (isset($_SESSION['uid']) && isset($_SESSION['email']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 style="color: #000;">Hello, <?php echo $_SESSION['email']; ?></h1>
     <h3>Your username, <?php echo $_SESSION['username']; ?></h3>
     <h3>Go to <a href="forex.php">Forex</a> </h3>
     <br>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>