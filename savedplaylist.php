<!DOCTYPE html>
<html>
<head>
    <title>Saved Playlist</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

</body>
</html>
<?php
include 'dbconnect.php';

    if (isset($_POST['add'])) {
        if (isset($_GET['v_id']) && $_GET['id']) {
        $v_id = $_GET['v_id'];
        $u_id = $_GET['id'];

        $sql_playlist = "UPDATE users SET saved_playlist = $v_id WHERE id = '$u_id'";
        //$sql_playlist = "INSERT INTO users (saved_playlist) VALUES ('$v_id') WHERE id='$u_id'";
        global $con;
        $run_sql = mysqli_query($con, $sql_playlist);
        if ($run_sql == true) {
            echo '<div class="alert alert-success">
                      <strong>Success!</strong> Video Added to Saved Playlist.
                    </div>';
                    header("Refresh:3; url=videoplayer.php?v_id=$v_id&id=$u_id");
        }
        else{
            echo '<div class="alert alert-danger">
                  <strong>Failed!</strong> Failed to Add Video. Try Again!
                </div>';
                header("Refresh:3; url=videoplayer.php?v_id=$v_id&id=$u_id");
        }
    }
    }
?>