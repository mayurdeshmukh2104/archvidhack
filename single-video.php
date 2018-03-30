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

    <title>Circle Video | Single video</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- player -->
    <link rel="stylesheet" href="js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelementplayer.min.css" />

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-circle-video.css" rel="stylesheet">

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
</head>

<body class="single-video dark">
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
            <div class="col-lg-8 col-xs-12 col-sm-12">
                <div class="sv-video">
                    <video poster="images/single-video.png" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                        <source src="videos/video-1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                    </video>
                </div>
                <h1><a href="#">Analyzing the Mass Effect: Andromeda E3 2016 Trailer</a></h1>
                <div class="author">
                    <a href="#"><img src="images/channel-user.png" alt="" class="sv-avatar"></a>
                    <div class="sv-name">
                        <div><a href="#">NaughtyDog</a> . 52 Videos</div>
                        <div class="c-sub">
                            <div class="c-f">
                                Subscribe
                            </div>
                            <div class="c-s">
                                22,548,145
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="sv-views">
                        <div class="sv-views-count">
                            2,729,347 views
                        </div>
                        <div class="sv-views-progress">
                            <div class="sv-views-progress-bar"></div>
                        </div>
                        <div class="sv-views-stats">
                            <span class="percent">95%</span>
                            <span class="green"><span class="circle"></span> 39,852</span>
                            <span class="grey"><span class="circle"></span> 852</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="info">
                    <h4>Cast:</h4>
                    <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>

                    <h4>Category :</h4>
                    <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>

                    <h4>About :</h4>
                    <p>Three years after the events of Uncharted 3: Drake's Deception, Nathan Drake, now retired as a fortune hunter, has settled into a normal life with his wife Elena Fisher. His world is then turned upside down when his older brother Sam, long believed to be dead, suddenly reappears seeking Drake's help.</p>

                    <h4>Tags :</h4>
                    <p class="sv-tags">
                        <span><a href="#">Uncharted 4</a></span>
                        <span><a href="#">Playstation 4</a></span>
                        <span><a href="#">Gameplay</a></span>
                        <span><a href="#">1080P</a></span>
                        <span><a href="#">ps4Share</a></span>
                        <span><a href="#">+ 6</a></span>
                    </p>

                    <div class="row date-lic">
                        <div class="col-lg-6">
                            <h4>Release Date:</h4>
                            <p>2 Days ago</p>
                        </div>
                        <div class="col-lg-6 ta-r">
                            <h4>License:</h4>
                            <p>Standard</p>
                        </div>
                    </div>

                    <div class="showless">
                        <a href="#">Show Less</a>
                    </div>

                    <div class="adblock2">
                        <div class="img">
                            Google AdSense<br>
                            728 x 90
                        </div>
                    </div>

                    <!-- similar videos -->
                    <div class="caption">
                        <div class="left">
                            <a href="#">Similar Videos</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="list similar-videos">

                        <div class="row">
                            <div class="col-lg-3 col-xs-12 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/sv-15.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Cornfield Chase Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        8,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-xs-12 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/sv-16.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">Amazing Facts About Nebulas ...</a>
                                    </div>
                                    <div class="v-views">
                                        2,729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-xs-12 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/sv-1.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">3DS Games Of 2016 that blew our mind</a>
                                    </div>
                                    <div class="v-views">
                                        639,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-xs-12 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.php"><img src="images/sv-4.png" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.php">No Man's Sky: 21 Minutes of Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END similar videos -->

                    <!-- comments -->
                    <div class="comments">
                        <div class="reply-comment">
                            <div class="rc-header"><i class="cv cvicon-cv-comment"></i> <span class="semibold">236</span> Comments</div>
                            <div class="rc-ava"><a href="#"><img src="images/ava5.png" alt=""></a></div>
                            <div class="rc-comment">
                                <form action="#" method="post">
                                    <textarea rows="3">Share what you think?</textarea >
                                    <button type="submit">
                                        <i class="cv cvicon-cv-add-comment"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comments-list">

                            <div class="cl-header">
                                <div class="c-nav">
                                    <ul class="list-inline">
                                        <li><a href="#" class="active">Popular Comments</a></li>
                                        <li><a href="#">Newest Comments</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- comment -->
                            <div class="cl-comment">
                                <div class="cl-avatar"><a href="#"><img src="images/ava8.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">BOWTZ pros</a> . 1 week ago</div>
                                    <div class="cl-text">Really great story. You're doing a great job. Keep it up pal.</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 121</span> <span class="grey"><span class="circle"></span> 2</span> . <a href="#">Reply</a></div>
                                    <div class="cl-replies"><a href="#">View all 5 replies <i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
                                    <div class="cl-flag"><a href="#"><i class="cv cvicon-cv-flag"></i></a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END comment -->

                            <!-- reply comment -->
                            <div class="cl-comment-reply">
                                <div class="cl-avatar"><a href="#"><img src="images/ava7.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">kingPIN</a> . 6 days ago</div>
                                    <div class="cl-text"> I was stuck too. then I started to shoot everything in Doom.</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 70</span> <span class="grey"><span class="circle"></span> 9</span> . <a href="#">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END reply comment -->

                            <!-- comment -->
                            <div class="cl-comment">
                                <div class="cl-avatar"><a href="#"><img src="images/ava2.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">Isleifna</a> . 1 week ago</div>
                                    <div class="cl-text">Omg thank you so much, idk how I couldn't figure out that master trap</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 245</span> <span class="grey"><span class="circle"></span> 19</span> . <a href="#">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END comment -->

                            <!-- comment -->
                            <div class="cl-comment">
                                <div class="cl-avatar"><a href="#"><img src="images/ava3.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">Mark</a> . 2 days ago</div>
                                    <div class="cl-text">you welcome could you watch my video plz dude you are awsome</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 516</span> <span class="grey"><span class="circle"></span> 64</span> . <a href="#">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END comment -->

                            <!-- comment -->
                            <div class="cl-comment">
                                <div class="cl-avatar"><a href="#"><img src="images/ava4.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">High_on_meme</a> . 4 days ago</div>
                                    <div class="cl-text">People allover the world took his music to heart and that music coming from his soul</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 95</span> <span class="grey"><span class="circle"></span> 0</span> . <a href="#">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END comment -->

                            <!-- reply comment -->
                            <div class="cl-comment-reply">
                                <div class="cl-avatar"><a href="#"><img src="images/ava5.png" alt=""></a></div>
                                <div class="cl-comment-text">
                                    <div class="cl-name-date"><a href="#">Battlefeelz</a> . 19 hours ago</div>
                                    <div class="cl-text">He looks like Rhett with the most glorious wig ever</div>
                                    <div class="cl-meta"><span class="green"><span class="circle"></span> 871</span> <span class="grey"><span class="circle"></span> 32</span> . <a href="#">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END reply comment -->



                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="loadmore-comments">
                                        <form action="#" method="post">
                                            <button class="btn btn-default h-btn">Load more Comments</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END comments -->
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-4 col-xs-12 col-sm-12">

                <!-- up next -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Up Next</a>
                    </div>
                    <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-1.png" alt=""></a>
                                <div class="time">15:19</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Battlefield 3: Official Fault Line Gameplay</a>
                            </div>
                            <div class="v-views">
                                2,729,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 55%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-2.png" alt=""></a>
                                <div class="time">4:23</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Kingdom Come: Deliverance ALPHA</a>
                            </div>
                            <div class="v-views">
                                429,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 79%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-3.png" alt=""></a>
                                <div class="time">7:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Markiplier Reacts to Mean Comments</a>
                            </div>
                            <div class="v-views">
                                630,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 83%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- END up next -->

                <div class="adblock">
                    <div class="img">
                        Google AdSense<br>
                        336 x 280
                    </div>
                </div>

                <!-- Recomended Videos -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Recomended Videos</a>
                    </div>
                    <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-4.png" alt=""></a>
                                <div class="time">15:19</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Cornfield Chase Outlast II Official Gameplay</a>
                            </div>
                            <div class="v-views">
                                2,729,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 55%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-5.png" alt=""></a>
                                <div class="time">4:23</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Amazing Facts About Nebulas ...</a>
                            </div>
                            <div class="v-views">
                                429,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 79%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-6.png" alt=""></a>
                                <div class="time">7:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">3DS Games Of 2016 that blew our mind</a>
                            </div>
                            <div class="v-views">
                                630,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 83%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-7.png" alt=""></a>
                                <div class="time">27:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">No Man's Sky: 21 Minutes of Gameplay</a>
                            </div>
                            <div class="v-views">
                                10,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 43%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-8.png" alt=""></a>
                                <div class="time">5:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">There Can Only Be One! Introducing Tanc ...</a>
                            </div>
                            <div class="v-views">
                                453,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 79%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-9.png" alt=""></a>
                                <div class="time">34:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Game of Thrones Season 6: Event Promo</a>
                            </div>
                            <div class="v-views">
                                1,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 93%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-10.png" alt=""></a>
                                <div class="time">6:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Mirror's Edge Catalyst Beta: PS4 vs Xbox One</a>
                            </div>
                            <div class="v-views">
                                420,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 73%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-11.png" alt=""></a>
                                <div class="time">21:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Cornfield Chase Outlast II Official Gameplay</a>
                            </div>
                            <div class="v-views">
                                50,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 94%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-12.png" alt=""></a>
                                <div class="time">7:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">3DS Games Of 2016 that blew our mind</a>
                            </div>
                            <div class="v-views">
                                630,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 83%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-13.png" alt=""></a>
                                <div class="time">23:18</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">Cornfield Chase Outlast II Official Gameplay</a>
                            </div>
                            <div class="v-views">
                                2,630,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 96%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="h-video row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-img">
                                <a href="single-video-tabs.php"><img src="images/sv-14.png" alt=""></a>
                                <div class="time">15:36</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="v-desc">
                                <a href="single-video-tabs.php">No Man's Sky: 21 Minutes of Gameplay</a>
                            </div>
                            <div class="v-views">
                                71,347 views
                            </div>
                            <div class="v-percent"><span class="v-circle"></span> 63%</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- END Recomended Videos -->

                <!-- load more -->
                <div class="loadmore">
                    <a href="#">Show more videos</a>
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
<script  src="js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelement-and-player.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
