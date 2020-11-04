<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['email']) && isset($_POST['password']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$expiring = validate($_POST['expiring']);
	$thisdate = date('Y-m-d');
	

                    // if($expired > $today)
                    // {
                    // echo "not expired";
                    // }
                    // else
                    // {
                    // echo "expired";
                    // }

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $password = md5($password);

        
		$sql = "SELECT * FROM users_db WHERE email='$email' AND password='$password' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			
            if($row['expiring'] > $thisdate){
				if ($row['verified'] === "1") {
					if ($row['email'] === $email && $row['password'] === $password && $row['status'] === "1") {
						$_SESSION['email'] = $row['email'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['uid'] = $row['uid'];
						$_SESSION['status'] = $row['status'];
						$_SESSION['tanggal'] = $row['tanggal'];
						$_SESSION['expiring'] = $row['expiring'];
						header("Location: gold");
						exit();
					}
					elseif ($row['email'] === $email && $row['password'] === $password && $row['status'] === "2") {
						$_SESSION['email'] = $row['email'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['uid'] = $row['uid'];
						$_SESSION['status'] = $row['status'];
						header("Location: silver");
						exit();
					}
					elseif ($row['email'] === $email && $row['password'] === $password && $row['status'] === "3") {
						$_SESSION['email'] = $row['email'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['uid'] = $row['uid'];
						$_SESSION['status'] = $row['status'];
						header("Location: bronze");
						exit();
					}
		// 			elseif ($row['email'] === $email && $row['password'] === $password && $row['status'] === "0") {
		// 				header("Location: login.php?error=your account has not been activated");
		// 		        exit();
		// 			}
					
					else{
						header("Location: login?error=Incorect Email or password");
						exit();
					}
				}else {
					header("Location: login?error=Your account has not been verified");
					exit();
				}
			}else {
				header("Location: login?error=Your account expired");
				exit();
			}
		}else{
			header("Location: login?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: login");
	exit();
}