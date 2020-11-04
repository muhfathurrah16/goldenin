<?php 
session_start();

if (isset($_SESSION['uid']) && isset($_SESSION['email'])) {
     if($_SESSION['status']=== "2"){
 ?>
     <!DOCTYPE html>
     <html>
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>SILVER PAGE</title>
          <link rel="stylesheet" href="assets/css/style.css">
          <style>
               body{
                    text-align: center;
                    margin-top: 50px;
               }
          </style>
     </head>
     <body>
          <h1>DASHBOARD PAGE SILVER MEMBER</h1>
          <h1 style="color: #000;">Hello, <?php echo $_SESSION['email']; ?></h1>
          <h3>Your username, <?php echo $_SESSION['username']; ?></h3>
          <h3>Go to <a href="forex.php">Forex</a> </h3>
          <br>
          <a href="logout.php">Logout</a>
     </body>
     </html>

<?php 
     }
     else{
          header("Location: login.php?error=you are not authorized to access silver page!");
     }
}else{
     header("Location: login.php");
     exit();
}
 ?>