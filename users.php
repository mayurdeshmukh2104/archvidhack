<?php
	// if(session_id() == '' || !isset($_SESSION)){session_start();}
session_start();
include("dbconnect.php");
if(@!$_SESSION["login_user"]){
 // echo " <h2>Login Frist </h2>";
 header("refresh:0.2 ; index.php");

}else{
 // echo "<h1>Welcome ".@$_SESSION['login_user'].'</h1>';
 // echo "<a href='logout.php' style='color:red'> Logout </a>";
 }
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>ArchVid | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-circle-video.css" rel="stylesheet">

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body class="dark">
<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
        <div class="btn-color-toggle">
            <img src="images/icon_bulb_dark.png" alt="">
        </div>
        <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="users.php"><img src="images/logo.svg" alt="Project name" class="logo" /></a>
                    </div> -->
                    <!-- <div class="col-lg-3 col-sm-10 col-xs-10">
                        <ul class="list-inline menu">
                            <li><a href="categories.php">Categories</a></li>
                            <li><a href="channel.php">Channels</a></li>
                        </ul>
                    </div> -->
                    <div class="visible-xs visible-sm clearfix"></div>
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <?php
                                $u_id = $_GET['id'];
                             $video_sql = "SELECT * FROM users WHERE id = '$u_id'";
                            
                            global $con;

                                $query = mysqli_query($con, $video_sql);

                                while ($row = mysqli_fetch_array($query)) {
                                    $u_id = $row['id'];
                                    echo '<form action="searchresults.php?id='.$u_id.'" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" name="srch" placeholder="Search" aria-describedby="sizing-addon2"><span></span>
                                    <button class="btn btn-group" name="searchb" type="submit">Search</button>
                                </div>
                            </div>
                        </form>';
                                    }
                            
                            ?>
                        
                    </div>
                    <div class="visible-xs clearfix"></div>
                    <div class="col-lg-2 col-sm-4  col-xs-8">
                        <!-- <div class="avatar pull-left">
                            <img src="images/avatar.png" alt="avatar" />
                            <span class="status"></span>
                        </div> -->
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<!-- goto -->
<div class="container-fluid">
    <div class="row">
        <div class="navbar-container2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <!-- <div class="goto">
                            Go to:
                        </div> -->
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <?php
                            if (isset($_GET['id'])) {
                                $u_id = $_GET['id'];
                            $namesql = "SELECT * FROM users WHERE id = '$u_id'";
                            global $con;
                            $run = mysqli_query($con, $namesql);
                            while ($rown = mysqli_fetch_assoc($run)) {
                                $fullname = $rown['fullname'];
                            }
                            }
                            ?>
                            <?php echo "<h4>Welcome, ".$fullname.'</h4>'; ?>
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"><font size="2"><!-- View Saved Playlist --></font></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"><font size="2"><!-- View Purchased Video --></font></i></a>
                            <!-- <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a> -->
                            <a href="logout.php"><span class="fa fa-sign-out fa fa-x" aria-hidden="true" data-toggle="tooltip"  data-placement="top" title="Logout">Logout</span></a>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /goto -->


                            <?php 
                            $video_sql = "SELECT * FROM video JOIN users";
                            
                            global $con;

                                $query = mysqli_query($con, $video_sql);

                                while ($row = mysqli_fetch_array($query)) {
                                    $u_id = $row['id'];
                                    $id = $row['v_id'];
                                    $title = $row['v_title'];
                                    $desc = $row['v_desc'];
                                    $price = $row['v_price'];
                                    $link = $row['v_link'];

                                    echo "
<div class='content-wrapper'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>

                <!-- Featured Videos -->
                <div class='content-block head-div'>
                    <div class='cb-header'>
                        <div class='row'>
                        </div>
                    </div>
                    
                        
                            <a href='videoplayer.php?v_id=$id&id=$u_id'>
                                <div class='col-lg-3 col-sm-6 videoitem'>
                                    <div class='b-video'>
                                        <div class='v-img'>
                                            <img src='images/video1-1.png' alt=''>
                                            <div class='time'>3:50</div>
                                        </div>
                                        <div class='v-desc'>
                                            <a href='videoplayer.php?v_id=$id&id=$u_id'>".$title."</a>
                                        </div>
                                        <div class='v-views'>
                                            27,548 views.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
<br>";
                                }
                            ?>
                            
                        
                

<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <a class="navbar-brand" href="users.php"><img src="images/logo.svg" alt="Project name" class="logo" /></a>
                </div>
                <div class="col-lg-7  col-sm-7 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>&copy;<a href="#"> H.A.R.S.M  2018</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-3 col-xs-12">
                    <div class="f-icon pull-left">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

