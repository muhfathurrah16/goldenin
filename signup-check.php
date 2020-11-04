<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password']) && isset($_POST['status'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	$re_password = validate($_POST['re_password']);
	$username = validate($_POST['username']);
	$status = validate($_POST['status']);
	$expiring = date("Y-m-d, H:i:s",strtotime("+30 days"));

	$user_data = 'email='. $email. 'username='. $username. 'status='.$status;


	if (empty($email)) {
		header("Location: signup?error=Email is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_password)){
        header("Location: signup?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($username)){
        header("Location: signup?error=Name is required&$user_data");
	    exit();
	}

	else if($password !== $re_password){
        header("Location: signup?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users_db WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$sql1 = "SELECT * FROM users_db WHERE username='$username'";
		$result1 = mysqli_query($conn, $sql1);

		$s1 = "SELECT * FROM users_db WHERE username='$username'";
		$result1 = mysqli_query($conn, $sql1);
		$s2 = "SELECT * FROM users_db WHERE username='$username'";
		$result1 = mysqli_query($conn, $sql1);
		$s3 = "SELECT * FROM users_db WHERE username='$username'";
		$result1 = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup?error=The Email is taken try another&$user_data");
	        exit();
		}
		elseif (mysqli_num_rows($result1) > 0) {
			header("Location: signup?error=The Username is taken try another&$user_data");
	        exit();
		}
		else {
           $sql2 = "INSERT INTO users_db(email, password, username, expiring, status) VALUES('$email', '$password', '$username', '$expiring', '$status')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
				//  header("Location: signup.php?success=Your account has been created successfully");
				//  exit();
				
				// SEND EMAIL
				// $from	 = "testlocal@mail.com" ;
				// $to		 = $email;
				// $subject = "Email Verification";
				// $message = "this is verification email. \r\n
				// 			your account actived.";
				// $headers = "From : goldeninvest@gmail.com";
				// $headers = "Thanks for your registration.";

				// mail($to, $subject, $message, $headers);
				if(isset($_POST['submit_register']))
				{
					ini_set( 'display_errors', 1 );   
					error_reporting( E_ALL );    
					$from    = "admin@goldenin.com";    
					$to      = $_POST['email'];   
					$subject = "Checking PHP mail";    
					$message = ' APA ITU GOLDEN INVESTOR?'. "\r\n" .
						'Golden investor merupakan sebuah layanan yang dapat membantu kebutuhan investasi mu.' . "\r\n" .
						'your email			: '.$to.''. "\r\n" .
						'your account type  : '.$status.''
						;

					$headers = "From:" . $from;    
					mail($to,$subject,$message, $headers);    
					// echo "Pesan email sudah terkirim.";
					header("Location: signup?success=Your account has been created. check your email to verify your account.");
					exit();
				}
				

				header("Location: signup?success=Your account has been created. check your email to verify your account.");
				exit();

           }else {
	           	header("Location: signup?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}
else{
	header("Location: signup.php");
	exit();
}

?>