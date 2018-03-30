<?php
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
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	<title>Video</title>
	<link rel="stylesheet" href="css/app.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-circle-video.css">
    
    <!-- player -->
    <link rel="stylesheet" href="js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelementplayer.min.css" />

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-circle-video.css" rel="stylesheet">
    <script type="text/javascript" src="src/js/videojs.watermark.js"></script><!-- No Prob -->
    <link rel="stylesheet" type="text/css" href="css/videojs.watermark.css"><!-- NO -->
    <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
    <!-- <script src="//vjs.zencdn.net/5.19/video.min.js"></script> --><!-- Problem -->
    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <!-- <script src="https://unpkg.com/video.js/dist/video.js"></script> --><!-- Problem -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/6.3.3/video-js.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/6.3.3/video.js"></script> --><!-- Problem -->

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
    <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="<color-code>" bolt-logo="<image path>"></script>
    <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="<color-
code>" bolt-logo="<image path>"></script>
</head>


<body class="single-video dark">
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
                        <form action="search.php" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="visible-xs clearfix"></div>
                    <div class="col-lg-2 col-sm-4  col-xs-8">
                        <!-- <div class="avatar pull-left">
                            <img src="images/avatar.png" alt="avatar" />
                            <span class="status"></span>
                        </div> -->
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                   <?php  ?>
                                    <span class="caret"></span>
                                </button>

                                 -->
                                    <!-- <button><a href='login.php'>Log In</a></button>
                                    <button><a href='signup.php'>Register</a></button> -->
                                    
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
                        <!-- <div class="goto">
                            Go to:
                        </div> -->
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons"><?php
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
                            <?php echo "<h4>Welcome, ".$fullname.'</h4>'; 
                            echo '<a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"><font size="2"><!-- View Saved Playlist --></font></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"><font size="2"><!-- View Purchased Video --></font></i></a>
                            <!-- <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a> -->
                            <a href="users.php?id='.$u_id.'"><i class="cv cvicon-cv-previous" data-toggle="tooltip" data-placement="top" title="Back"></i></a>
                            <a href="logout.php"><span class="fa fa-sign-out fa fa-x" aria-hidden="true" data-toggle="tooltip"  data-placement="top" title="Logout">Logout</span></a>'
                            ?>
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
            <div class="col-lg-12 col-xs-12 col-sm-12">
                <div class="sv-video">
                    <?php
                        if (isset($_GET['v_id'])) {
                            $v_id = $_GET['v_id'];
                            global $con;
                            $query = mysqli_query($con, " SELECT * FROM video WHERE v_id ='$v_id' ");
                            while ($row = mysqli_fetch_assoc($query)) {
                                $v_title = $row['v_title'];
                                $v_desc = $row['v_desc'];
                                $v_price = $row['v_price'];
                                $v_link = $row['v_link'];
                                $v_url = $row['v_url'];
                                // $video_file = $_FILES['video_up']['name'];

                               echo '
			<div class="video-wrapper">
				<video class="video" preload="auto" autobuffer="" controls controlsList="nodownload" controlsList="nofullscreen" width="100%" height="100%" id="my-player" class="video-js" data-setup autoplay="autoplay">
					<source src="'.$v_url.'" type="video/mp4; codecs="avc1.42E01E, mp4a.40.2"" id="my-player">
				</video>
			</div>';
                            }


                        }
                        else{
                            echo "Error!";
                        }
                    ?>
                     
                    <!-- <span class="sv-play"><i class="cv cvicon-cv-play"></i></span> -->
                </div>
                
                <h1><a href="#"><?php echo "$v_title"; ?></a></h1>
                <div class="info">
                    <div class="custom-tabs">
                        <div class="tabs-panel">
                            <a href="#" class="active" data-tab="tab-1">
                                <i class="cv cvicon-cv-about" data-toggle="tooltip" data-placement="top" title="About"></i>
                                <span>Description</span>
                            </a>
                            <a href="#" data-tab="tab-3">
                                <i class="cv cvicon-cv-download" data-toggle="tooltip" data-placement="top" title="Download"></i>
                                <span>Purchase</span>
                            </a>
                            <!-- <a href="#" data-tab="tab-5">
                                <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to"></i>
                                <span>Add to</span>
                            </a> -->
                           </div>
                        <div class="clearfix"></div>

                        <!-- BEGIN tabs-content -->
                        <div class="tabs-content">
                            <!-- BEGIN tab-1 -->
                            <div class="tab-1">
                                <!-- <div> -->
                                    <?php echo "<p><br><h4>$v_desc</h4></p>"; ?>
                                    
<!--                                     <h4>Tags :</h4>
                                    <p class="sv-tags">
                                        <span><a href="#">Uncharted 4</a></span>
                                        <span><a href="#">Playstation 4</a></span>
                                        <span><a href="#">Gameplay</a></span>
                                        <span><a href="#">1080P</a></span>
                                        <span><a href="#">ps4Share</a></span>
                                        <span><a href="#">+ 6</a></span>
                                    </p> -->

                                    <div class="row date-lic">
                                        <div class="col-lg-6 ta-r">
                                            <h4>License:</h4>
                                            <p>Standard</p>
                                        </div>
                                    </div>
                             </div>
                            <!-- END tab-1 -->

                            <!-- BEGIN tab-2 -->
                            <div class="tab-2">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4>Link:</h4>
                                        <label class="clipboard">
                                            <input type="text" name="#" class="share-link" value="http://youtu.be/DwGgdfe-C6c" readonly>
                                            <div class="btn-copy" data-clipboard-target=".share-link">Copy</div>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Start at:</h4>
                                        <label class="checkbox">
                                            <input type="checkbox" name="#">
                                            <span class="arrow"></span>
                                        </label>
                                        <input type="text" name="#" value="3:20" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Embed:</h4>
                                        <textarea type="text" name="#" readonly><iframe width="560" height="315" src="https://www.circle.com/embed/ZocVTdsercgvsd3nA3JM?controls=0" frameborder="0" allowfullscreen></iframe></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Video Size:</h4>
                                        <div class="tags-type1">
                                            <a href="#">360P</a>
                                            <a href="#">480P</a>
                                            <a href="#">720P</a>
                                            <a href="#">1080P</a>
                                            <a href="#">Custom</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show suggested videos when the video finishes</p>
                                        </label>
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show player controls</p>
                                        </label>
                                        <label class="checkbox-text">
                                            <label class="checkbox">
                                                <input type="checkbox" name="#">
                                                <span class="arrow"></span>
                                            </label>
                                            <p>Show video title and player actions</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- END tab-2 -->

                            <!-- BEGIN tab-3 -->
                            <div class="tab-3">
                                <h4>Purchase:</h4>
                                <center><?php echo "<h4>Price of the Video is :<strong> $v_price</strong></h4>"; ?></center>
                                <label class="checkbox-text">
                                    <label class="checkbox">
                                        <input type="checkbox" name="#">
                                        <span class="arrow"></span>
                                    </label>

                                    <p>By Downloading this video I agree that I will not upload this video anywhere else without proper permission from the creator.</p>

                                </label>
                                <?php 
                                    if (isset($_GET['v_id'])) {
                                        $v_id = $_GET['v_id'];
                            global $con;
                            $query = mysqli_query($con, " SELECT * FROM video WHERE v_id ='$v_id' ");
                            while ($row = mysqli_fetch_assoc($query)) {
                                //$vid_id = $row['v_id']; 
                                $v_title = $row['v_title'];
                                $v_desc = $row['v_desc'];
                                $v_price = $row['v_price'];
                                $v_link = $row['v_link'];
                                $v_url = $row['v_url'];

                                echo '<a href="PayUMoney/PayUMoney_form.php?v_price='.$v_price.';v_id='.$v_id.';v_title='.$v_title.'"><button type="submit" name="submit" class="btn-primary u-btn">Purchase</button></a>';
                                        }
                                    }
                                    ?>
                                
                            </div>

                            <!-- END tab-3 -->

                            <!-- BEGIN tab-4 -->
                            <!-- END tab-4 -->

                            <!-- BEGIN tab-5 -->
                            <!-- <div class="tab-5">
                                <h4>Add to Saved Playlist:</h4>
                                <div class="block-list">
                                    <div>
                                        <i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i>
                                        <span class="name">Saved Playlist</span>
                                        <i class="cv cvicon-cv-plus" data-toggle="tooltip" data-placement="top" title="Add to Saved Playlist"></i>
                                    </div>
                                </div>
                            </div> -->
                            
                            <br>


                            <!-- END tab-5 -->
                        </div>
                        <!-- END tabs-content -->
                    </div>
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-4 col-xs-12 col-sm-12">

                <!-- up next -->
                                
                <!-- END up next -->

                <!-- Recomended Videos -->
                <!-- END Recomended Videos -->

                
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



	<!-- Video Original -->
	
<!-- Video Original Ends -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/vendor/clipboard/dist/clipboard.min.js"></script>
<!-- <script  src="js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelement-and-player.min.js"></script> -->
<script src="js/custom.js"></script>

<style>
	video::-webkit-media-controls-fullscreen-button {
    display: none;
}

video::-webkit-media-controls-play-button {}
video::-webkit-media-controls-timeline {}
video::-webkit-media-controls-current-time-display{}
video::-webkit-media-controls-time-remaining-display {}
video::-webkit-media-controls-time-remaining-display {}
video::-webkit-media-controls-mute-button {}
video::-webkit-media-controls-toggle-closed-captions-button {}
video::-webkit-media-controls-volume-slider {}

</style>
</body>
</html>