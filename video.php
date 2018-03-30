<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arch Video</title>
	<link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/5.19/video.min.js"></script>
	<!-- unpkg -->
<link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
<script src="https://unpkg.com/video.js/dist/video.js"></script>

<!-- cdnjs -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/6.3.3/video-js.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/6.3.3/video.js"></script>
<script type="text/javascript" src="src/js/videojs.watermark.js"></script>

<link rel="stylesheet" type="text/css" href="css/videojs.watermark.css">

</head>
<body>
	<h1 align="center">Demo Video</h1>
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

                        }
                        }
                    ?>
	<center><video 
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    data-setup='{}'>
  <source src="$v_url" type="video/mp4"></source>
  <source src="$v_url" type="video/webm"></source>
  <source src="$v_url" type="video/ogg"></source>
  <style>
    p {
      background-color: #eee;
      border: thin solid #777;
      padding: 10px;
    }
  </style>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="http://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video></center>
<script>
// initialize video.js
var my_video_id = videojs('my-player');

// Set value to the plugin
my_video_id.watermark({
  file: 'Owned_Stamp.png',
  xpos: 20,
  ypos: 0,
  xrepeat: 10,
  opacity: 0.5,
  clickable: false,
        url: "",
        className: 'vjs-watermark',
	text: false,
        debug: false
  });
</script>
</body>
</html>