<style>
    h2,label, input, button {
        margin-left: 25px;
    }
</style>

<form action="" method="post">
    <h2>LOGIN</h2>

    <label>Email</label>
    <?php if (isset($_GET['email'])) { ?>
        <input type="email" 
                name="email" 
                placeholder="Email"
                value="<?php echo $_GET['email']; ?>"><br>
    <?php }else{ ?>
        <input type="email" 
            name="email" 
            placeholder="Email"><br>
    <?php }?>
    <br>
    <button type="submit" name="button_pressed">Login</button>

</form>

<?php

session_start(); 
include "dbs_conn.php";

if (isset($_POST['email'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);

    $user_data = 'email='. $email;

    if (empty($email)) {
		header("Location: new-test-email.php?error=Email is required&$user_data");
	    exit();
    }
    
    else{
        $sql = "SELECT * FROM users_dbs WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
			header("Location: new-test-email.php?error=The Email is taken try another&$user_data");
	        exit();
        }
        else {
            $sql2 = "INSERT INTO users_dbs(email) VALUES('$email')";
            $result2 = mysqli_query($conn, $sql2);
        }
    }
}


if(isset($_POST['button_pressed']))
{
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from    = "fatrah01071998@gmail.com";    
    $to      = $_POST['email'];   
    $subject = "Checking PHP mail";    
    $message = ' APA ITU GOLDEN INVESTOR?'. "\r\n" .
        'Golden investor merupakan sebuah layanan yang dapat membantu kebutuhan investasi mu.' . "\r\n" .
        'your email : '.$to.'';

    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
}

?>