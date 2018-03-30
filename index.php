<?php
session_start();
include("dbconnect.php");
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "select * from users where email = '$email' and password='$password'";
  global $con;
  $exe_query = mysqli_query($con, $query);
  $found_num_rows = mysqli_num_rows($exe_query);

  if($found_num_rows == true ){
   $_SESSION['login_user'] = $email;

   $sql = "SELECT * FROM users WHERE email = '$email'";
   $run = mysqli_query($con, $sql);
   while ($row = mysqli_fetch_assoc($run)) {
     $id = $row['id'];
     header("Location: users.php?id=$id");
   }
   
   
#  header("location:index.php?success=Login Sucessfull");
#  header("refresh: 3; url=welcome.php");

  }else{
   header("location:index.php?invailid=Username or Password invalid please try Again");
  }


}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="" />
<meta name="author" content="" />


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>

<body class="dark">
    
    <br>
            <div class="col-md-6">
             <div class="p-30 mt-10 bg-theme-colored">
             <!-- <center><h3 class="title-pattern mt-0"><span class="text-white">INQUIRY Form <span class="text-theme-color-2"></span></span></h3></center> -->
              <!-- Appilication Form Start-->
              <br>
            <center><img src="logo.png" height="120" width="213"></center>
           <header>
            <center>
          <strong><span class="backspace"><font color="white">Sign in to find interesting thing</strong></span>
        </center>
        </header>
            
              <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="index.php">
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Email id." type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" id="email" name="email" required="" class="form-control" >
                    </div>
                   
                  </div>
                 
                  
                       <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="reservation_phone" name="password" required=""  class="form-control" title="Your Password contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group mb-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" name="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" value="submit" data-loading-text="Please wait...">Sign in</button>
                    </div>
                 
                  </div>
</form>
  <div>
    <!-- <center><strong><span class="backspace"><a href="signup.php"><font color="white">Not Yet Registered? Click Here to Register</font></a></span></strong></center> -->
  </div>
              <!-- Application Form End-->

              <!-- Application Form Validation Start-->
              <script type="text/javascript">
                $("#reservation_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }z
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
              <!-- Application Form Validation Start -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</script>

</body>
</html>
