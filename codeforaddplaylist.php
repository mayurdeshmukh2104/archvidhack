<div class="tab-5">
                                <center><h4>Add to Saved Playlist:</h4>
                                    <?php 
                                    if (isset($_GET['v_id'])) {
                                        $v_id = $_GET['v_id'];
                                        $u_id = $_GET['id'];
                            global $con;
                            $query = mysqli_query($con, " SELECT * FROM video JOIN users WHERE v_id ='$v_id' AND id = '$u_id' ");
                            while ($row = mysqli_fetch_assoc($query)) {
                                //$vid_id = $row['v_id']; 
                                $v_title = $row['v_title'];
                                $v_desc = $row['v_desc'];
                                $v_price = $row['v_price'];
                                $v_link = $row['v_link'];
                                $v_url = $row['v_url'];

                                echo '<form action="savedplaylist.php?v_id='.$v_id.'&id='.$u_id.'" method="post">
                                <div class="block-list">
                                    <button type="submit" class="btn btn-primary" name="add" value="submit">Add</button>
                                </div>
                                </form>';
                                        }
                                    }
                                    ?>
                                    
                            </center>
                            </div>