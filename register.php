<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
include('dbconnect.php');

global $con;
// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['fullname'] = $_POST['fullname'];

// Escape all $_POST variables to protect against SQL injections
$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$password = mysqli_real_escape_string($con, $_POST['password']);
// $hash = mysqli_real_escape_string( $con, md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email'") or die(mysqli_error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    // $_SESSION['message'] = 'User with this email already exists!';
    header("location: userexistsmsg.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (fullname, email, phoneno, age, gender, dob, city, state, country, password) " 
            . "VALUES ('$fullname','$email','$phoneno','$age', '$gender', '$dob', '$city', '$state', '$country', '$password')";

    // Add user to the database
    if ( mysqli_query($con, $sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
       # $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        // $to      = $email;
        // $subject = 'Account Verification ( ArchVid )';
        // $message_body = '
        // Hello '.$fullname.',

        // Thank you for signing up!

        // Please click this link to activate your account:

        // http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

       # mail( $to, $subject, $message_body );

        header("location: accountcreatesuccess.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: accountcreatefailed.php");
    }

}