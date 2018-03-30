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

    <title>Circle Video | Home Page</title>

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
            <div class="col-lg-12">

                <!-- Updates from Subscriptions -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-10">
                                <ul class="list-inline">
                                    <li><a href="#">Updates from Subscriptions</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-2">
                                <div class="pull-right">
                                    <i class="btn-arrow"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Updates from Subscriptions -->

                <!--Videos -->
                <div class="content-block head-div subscription">
                    <div class="cb-content videolist">
                        <div class="sscr-user-info">
                            <a href="#" class="sscr-image">
                                <img src="images/ava2.png" alt="image">
                            </a>
                            <span class="sscr-name">NaughtyDog</span>
                            <span class="sscr-time-active">Last active 3 hours ago</span>
                            <a href="#" class="btn-close"><i class="cv cvicon-cv-cancel"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-8.png" alt="">
                                            <div class="time">3:50</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky: 21 Minutes of New Gameplay - IGN First</a>
                                    </div>
                                    <div class="v-views">
                                        27,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-7.png" alt="">
                                            <div class="time">15:19</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">GTA 5: Michael, Franklin, and Trevor in the Flesh</a>
                                    </div>
                                    <div class="v-views">
                                        8,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-6.png" alt="">
                                            <div class="time">4:23</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Battlefield 3: Official Fault Line Gameplay Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        2,729,347 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="sscr-user-info">
                            <a href="#" class="sscr-image">
                                <img src="images/ava4.png" alt="image">
                            </a>
                            <span class="sscr-name">NaughtyDog</span>
                            <span class="sscr-time-active">Last active 2 days ago</span>
                            <a href="#" class="btn-close"><i class="cv cvicon-cv-cancel"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-4.png" alt="">
                                            <div class="time">23:57</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">BATTALION 1944: TAKING ON BATTLEFIELD 5</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-3.png" alt="">
                                            <div class="watched-mask"></div>
                                            <div class="watched">WATCHED</div>
                                            <div class="time">7:27</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                                    </div>
                                    <div class="v-views">
                                        185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-2.png" alt="">
                                            <div class="time">12:58</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Amazing Facts About Nebulas Inside Deep Universe</a>
                                    </div>
                                    <div class="v-views">
                                        203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-1.png" alt="">
                                            <div class="time">9:47</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="sscr-user-info">
                            <a href="#" class="sscr-image">
                                <img src="images/ava5.png" alt="image">
                            </a>
                            <span class="sscr-name">NaughtyDog</span>
                            <span class="sscr-time-active">Last active 6 hours ago</span>
                            <a href="#" class="btn-close"><i class="cv cvicon-cv-cancel"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-8.png" alt="">
                                            <div class="time">54:23</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">There Can Only Be One! Introducing Tanc & Hercules</a>
                                    </div>
                                    <div class="v-views">
                                        197,199 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-7.png" alt="">
                                            <div class="time">47:12</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Pokémon 3: The Movie - Spell Of The Unown: Entei HD...</a>
                                    </div>
                                    <div class="v-views">
                                        245,993 views. <span class="v-percent"><span class="v-circle"></span>93%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="sscr-user-info">
                            <a href="#" class="sscr-image">
                                <img src="images/ava6.png" alt="image">
                            </a>
                            <span class="sscr-name">NaughtyDog</span>
                            <span class="sscr-time-active">Last active 4 days ago</span>
                            <a href="#" class="btn-close"><i class="cv cvicon-cv-cancel"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-8.png" alt="">
                                            <div class="time">3:50</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky: 21 Minutes of New Gameplay - IGN First</a>
                                    </div>
                                    <div class="v-views">
                                        27,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-7.png" alt="">
                                            <div class="time">15:19</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">GTA 5: Michael, Franklin, and Trevor in the Flesh</a>
                                    </div>
                                    <div class="v-views">
                                        8,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video2-6.png" alt="">
                                            <div class="time">4:23</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Battlefield 3: Official Fault Line Gameplay Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        2,729,347 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="sscr-user-info">
                            <a href="#" class="sscr-image">
                                <img src="images/ava8.png" alt="image">
                            </a>
                            <span class="sscr-name">NaughtyDog</span>
                            <span class="sscr-time-active">Last active 20 min ago</span>
                            <a href="#" class="btn-close"><i class="cv cvicon-cv-cancel"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-4.png" alt="">
                                            <div class="time">1:20:10</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Mirror's Edge Catalyst Beta: PS4 vs Xbox One Frame-Rate... </a>
                                    </div>
                                    <div class="v-views">
                                        167,131 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-3.png" alt="">
                                            <div class="time">8:54</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">THE MAGNIFICENT SEVEN - Teaser Trailer (HD)</a>
                                    </div>
                                    <div class="v-views">
                                        14,521 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-2.png" alt="">
                                            <div class="time">6:23</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Game of Thrones Season 6: Event Promo (HBO)</a>
                                    </div>
                                    <div class="v-views">
                                        40,308 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php">
                                            <img src="images/video1-1.png" alt="">
                                            <div class="time">5:41</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">CHAPPIE Movie – Die Antwoord Featurette...</a>
                                    </div>
                                    <div class="v-views">
                                        3,472,163 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Videos -->

                <!-- pagination -->
                <div class="v-pagination">
                    <ul class="list-inline">
                        <li><a href="#">
                            <div class="pages"><i class="cv cvicon-cv-previous"></i></div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">1</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">2</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages active">3</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">4</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">5</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">...</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages">10</div>
                        </a></li>
                        <li><a href="#">
                            <div class="pages"><i class="cv cvicon-cv-next"></i></div>
                        </a></li>
                    </ul>
                </div>
                <!-- /pagination -->

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
