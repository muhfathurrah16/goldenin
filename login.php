<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<br> <br>
          <h1>GOLDEN INVESTOR</h1>
     </div>
     <form action="login-check.php" method="post">
		 <h2>LOGIN</h2>
		 <div class="logo" style="text-align: center; margin-bottom: 20px;">
			 <img src="assets/img/logo.png" alt="" style="width: 150px;">
		 </div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>Email</label>
     	<input type="email" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup" class="ca">Create an account</a>
     </form>
</body>
</html>