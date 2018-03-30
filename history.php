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

    <title>Circle Video | History</title>

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
                    <div class="col-lg-3 col-sm-10 col-xs-10">
                        <ul class="list-inline menu">
                            <li class="pages">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Home Page</a></li>
                                    <li><a href="single-video.php">Single Video Page</a></li>
                                    <li><a href="single-video-youtube.php">Single Video Youtube Embedded Page</a></li>
                                    <li><a href="single-video-vimeo.php">Single Video Vimeo Embedded Page</a></li>
                                    <li><a href="upload.php">Upload Video Page</a></li>
                                    <li><a href="upload-edit.php">Upload Video Edit Page</a></li>
                                    <li><a href="search.php">Searched Videos Page</a></li>
                                    <li><a href="channel.php">Single Channel Page</a></li>
                                    <li><a href="channels.php">Channels Page</a></li>
                                    <li><a href="single-video-tabs.php">Single Videos Page With Tabs</a></li>
                                    <li><a href="single-video-playlist.php">Single Videos Page With Playlist</a></li>
                                    <li><a href="history.php">History Page</a></li>
                                    <li><a href="categories.php">Browse Categories Page</a></li>
                                    <li><a href="categories_side_menu.php">Browse Categories Side Menu Page</a></li>
                                    <li><a href="subscription.php">Subscription Page</a></li>
                                    <li><a href="login.php">Login Page</a></li>
                                    <li><a href="signup.php">Signup Page</a></li>
                                </ul>
                            </li>
                            <li><a href="categories.php">Categories</a></li>
                            <li><a href="channel.php">Channels</a></li>
                        </ul>
                    </div>
                    <div class="visible-xs visible-sm clearfix"></div>
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <form action="search.php" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
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
                                    Bailey
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="signup.php">Sign up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div>
                    <a href="upload.php">
                        <div class="upload-button">
                            <i class="cv cvicon-cv-upload-video"></i>
                        </div>
                    </a>
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
                        <div class="goto">
                            Go to:
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-10 col-xs-12">
                        <div class="h-resume">
                            <div class="play-icon">
                                <a href="#"><i class="cv cvicon-cv-play"></i></a>
                            </div>
                            Resume:  <span class="color-default">Daredevil Season 2 : Episode 6 </span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="h-grid">
                            <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                            <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
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
            <div class="col-lg-12 v-history">

                <!-- History -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-8 col-xs-12 col-sm-6">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active active">Watch history</a></li>
                                    <li><a href="#">Search history</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xs-12 col-sm-6 h-clear">
                                <a href="#"><i class="cvicon-cv-cancel"></i> Clear all Search History</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="cb-content">

                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-xs-12 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-1.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Batman Arkham City: Hugo Strange Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        7,239,852 views. 3 years ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 84%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-2.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky - What are Sentinels</a>
                                    </div>
                                    <div class="v-views">
                                        23,356 views . 6 days ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 78%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-3.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">When Time Breaks Down | Space Time | PBS Digital </a>
                                    </div>
                                    <div class="v-views">
                                        446,972 views . 4 months ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 89%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-4.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">The Witcher 3 Wild Hunt: Dragon Hunt monster contract </a>
                                    </div>
                                    <div class="v-views">
                                        4,796 views . 1 week ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 83%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-5.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Titanfall - Free The Frontier Trailer - Gamescom 2014</a>
                                    </div>
                                    <div class="v-views">
                                        813,197 views . 1 year ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 84%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-6.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky: YEAR ONE! Updates and DLC! Ground </a>
                                    </div>
                                    <div class="v-views">
                                        2,200,965 views . 3 years ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 63%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-7.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">DIE ANTWOORD - UGLY BOY</a>
                                    </div>
                                    <div class="v-views">
                                        58,714,094 views . 1 year ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 95%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video1-8.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">100 Ways to Die in Fallout 4 (Part 1) mans1ay3r ver.</a>
                                    </div>
                                    <div class="v-views">
                                        1,899,380 views . 5 months ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 91%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video2-1.png" alt=""></a>
                                        <div class="time">2:15</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Doom: 48 Minutes of Single-Player Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        652,056 views . 3 weeks ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 72%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="h-divider"></div>
                            </div>
                        </div>
                        <!-- ///history video row -->



                        <!-- history video row -->
                        <div class="row">
                            <div class="h-video">
                                <div class="col-lg-2 col-sm-5">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/video2-2.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-10 col-sm-5">
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky's Sean Murray - IGN Unfiltered 06</a>
                                    </div>
                                    <div class="v-views">
                                        255,027 views . 3 weeks ago
                                    </div>
                                    <div class="v-percent"><span class="v-circle"></span> 86%</div>
                                </div>
                                <div class="col-lg-2 col-xs-2 col-sm-2 h-clear-list">
                                    <a href="#"><i class="cvicon-cv-cancel"></i>    </a>
                                </div>
                            </div>
                        </div>
                        <!-- ///history video row -->
                    </div>
                </div>
                <!-- /History -->

                <div class="loadmore">
                    <form action="#" method="post">
                        <button class="btn btn-default h-btn">Load more Videos</button>
                    </form>
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
