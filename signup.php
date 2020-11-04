<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style type="text/css">
          .switch-field {
               display: flex;
               /* margin-bottom: 20px; */
               overflow: hidden;
               margin: 0 8px 30px;
          }
          .switch-field input {
               position: absolute !important;
               clip: rect(0, 0, 0, 0);
               height: 1px;
               width: 1px;
               border: 0;
               overflow: hidden;
          }
          .switch-field label {
               background-color: #e4e4e4;
               color: rgba(0, 0, 0, 0.6);
               font-size: 14px;
               line-height: 1;
               text-align: center;
               padding: 8px 46px;
               margin-right: -1px;
               border: 1px solid rgba(0, 0, 0, 0.2);
               box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
               transition: all 0.1s ease-in-out;
          }
          .switch-field label:hover {
               cursor: pointer;
          }
          .switch-field input:checked + label {
               background-color: #a5dc86;
               box-shadow: none;
          }
          .switch-field label:first-of-type {
	          border-radius: 4px 0 0 4px;
          }

          .switch-field label:last-of-type {
               border-radius: 0 4px 4px 0;
          }
     </style>

</head>
<body>
     <div class="header">
          <h1>GOLDEN INVESTOR</h1>
     </div>
     <form action="signup-check.php" method="post">
          <h2>REGISTER</h2>
          <div class="logo" style="text-align: center; margin-bottom: 20px;">
			 <img src="assets/img/logo.png" alt="" style="width: 150px;">
		 </div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <!-- <label>Username</label> -->
          <?php if (isset($_GET['username'])) { ?>
               <input id="username" 
                      type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['username']; ?>">
          <?php }else{ ?>
               <input id="username"
                      type="text" 
                      name="username" 
                      placeholder="Username">
          <?php }?>

          <!-- <label>Email</label> -->
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>">
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email">
          <?php }?>

     	<!-- <label>Password</label> -->
     	<input type="password" 
                 name="password" 
                 placeholder="Password">

          <!-- <label>Password Confirmation</label> -->
          <input type="password" 
                 name="re_password" 
                 placeholder="Password Confirmation">

          <!-- <p style="color:white;">Member type :</p> -->
          <div class="switch-field">
               <?php if (isset($_GET['status'])) { ?>
                    <input type="radio" id="radio-three" name="status" value="<?php echo $_GET['status']; ?>" checked/>
                    <label for="radio-three" name=>Gold</label>
               <?php } else{ ?>
                    <input type="radio" id="radio-three" name="status" value="1" checked/>
                    <label for="radio-three" name=>Gold</label>
               <?php }?>
               <?php if (isset($_GET['status'])) { ?>
                    <input type="radio" id="radio-four" name="status" value="<?php echo $_GET['status']; ?>" />
                    <label for="radio-four" name=>Silver</label>
               <?php } else{ ?>
                    <input type="radio" id="radio-four" name="status" value="2" />
                    <label for="radio-four" name=>Silver</label>
               <?php }?>
               <?php if (isset($_GET['status'])) { ?>
                    <input type="radio" id="radio-five" name="status" value="<?php echo $_GET['status']; ?>" />
                    <label for="radio-five" name=>Bronze</label>
               <?php } else{ ?>
                    <input type="radio" id="radio-five" name="status" value="3" />
                    <label for="radio-five" name=>Bronze</label>
               <?php }?>
          </div>

          <?php date('d-m-Y', mktime( 0, 0, 0, date('n'), date('j') + 30, date('y'))); ?>

     	<button type="submit" name="submit_register">Register</button>
          <a href="login" class="ca">Already have an account?</a>
     </form>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
     <script>
           $('#username').keypress(function( e ) {
                    if(e.which === 32) 
                         return false;
               });
     </script>
</body>
</html>