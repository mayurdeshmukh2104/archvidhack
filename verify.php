<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'dbconnect.php';

global $con;
session_start();

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = mysqli_real_escape_string($_GET['email']); 
    $hash = mysqli_real_escape_string($_GET['hash']); 
    
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");

    if ( result_num_rows() == 0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: index.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        mysqli_query($con, "UPDATE users SET active='1' WHERE email='$email'") or die(mysqli_error());
        $_SESSION['active'] = 1;
        echo "Your Account Has been Activated";
        header("location: users.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: index.php");
}     
?>