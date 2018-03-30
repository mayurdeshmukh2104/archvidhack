<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include("dbconnect.php");
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

    <title>Circle Video | Upload Video Page</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="Project name" class="logo" /></a>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-10 col-xs-10">
                        <ul class="list-inline menu">
                            <li><a href="categories.php">Categories</a></li>
                            <li><a href="channel.php">Channels</a></li>
                        </ul>
                    </div> -->
                    <div class="visible-xs visible-sm clearfix"></div>
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <form action="search.php" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <!-- <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="visible-xs clearfix"></div>
                    <div class="col-lg-2 col-sm-4  col-xs-8">
                        <div class="avatar pull-left">
                            <img src="images/avatar.png" alt="avatar" />
                            <span class="status"></span>
                        </div>
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                   <?php  ?>
                                    <span class="caret"></span>
                                </button>
                                <?php

                                  if(isset($_SESSION['username'])){
                                    echo '<ul class="dropdown-menu">
                                    <li><a href="account.php">My Cart</a></li>
                                    <li><a href="logout.php">Log Out</a></li>
                                    </ul>';
                                    // echo '';
                                  }
                                  else{
                                    echo "<ul class='dropdown-menu'>
                                    <li><a href='login.php'>Log In</a></li>
                                    <li><a href='signup.php'>Register</a></li>
                                    </ul>";
                                    // echo '';
                                    // echo '';
                                  }
                                  ?>
                               <!--  <ul class="dropdown-menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="signup.php">Sign up</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- <div>
                    <a href="upload.php">
                        <div class="upload-button">
                            <i class="cv cvicon-cv-upload-video"></i>
                        </div>
                    </a>
                </div> -->
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
                        <div class="goto">
                            Go to:
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"><font size="2"><!-- View Saved Playlist --></font></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"><font size="2"><!-- View Purchased Video --></font></i></a>
                            <!-- <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a> -->
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /goto -->

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 upload-page">

                <div class="u-area">
                    <i class="cv cvicon-cv-upload-video"></i>

                    <p class="u-text1">Select Video files to upload</p>
                    <p class="u-text2">or drag and drop video files</p>

                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <!-- <button class="btn btn-primary u-btn">Upload Video</button> -->
                        <input type="text" name="title" placeholder="Enter Title" required> <br><br>
                        <input type="text" name="description" placeholder="Enter Description" required> <br><br>
                        <input type="number" name="price" placeholder="Enter Price" required> <br><br>
                        <input type="file" name="video_up" placeholder="Upload Video" required>
                        <button type="submit" name="submit" class="btn-primary u-btn">Upload</button>
                    </form>
                </div>

                <div class="u-terms">
                    <p>By submitting your videos to circle, you acknowledge that you agree to circle's <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                    <p>Please be sure not to violate others' copyright or privacy rights. Learn more</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="Project name" class="logo" /></a>
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
                            <li>Copyrights 2016 <a href="azyrusthemes.com">azyrusthemes.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-3 col-xs-12">
                    <div class="f-icon pull-left">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="f-lang pull-right">
                        <!-- Small button group -->
                        <div class="btn-group dropup pull-right">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                            </ul>
                        </div>
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
<!---->

<?php
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $video = $_FILES['video_up']['name'];
        $video_tmp = $_FILES['video_up']['tmp_name'];
        $url = "http://127.0.0.1/hack/videos/$video";

        global $con;

        $sql = "INSERT INTO video (v_title, v_desc, v_price, v_link, v_url) VALUES ('$title', '$description', '$price', '$video', '$url')";

        move_uploaded_file($video_tmp, "videos/".$video);

        
        $run_sql = mysqli_query($con, $sql);

        if ($run_sql = true) {
            echo "<script>alert('Successfully Added Video!')</script>";
        }
        else{
            echo "<script>alert('Failed. Please try again.')</script>";
        }
    }
?>