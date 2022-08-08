<?php
//header("Refresh:3");
include 'world_connection.php';
$topic_id=$_SESSION['topic_id'];

$image_query=mysqli_query($conn,"SELECT * FROM discuss WHERE topic_id='$topic_id' ");
        $i=0;
        while ($row = mysqli_fetch_array($image_query))
        {
            ?>
           
           
            <div class="d-flex justify-content-center py-2">
                <div class="second py-2 px-2"> <span class="text1">  <?php echo $row['comment']; ?> </span>
                    <div class="d-flex justify-content-between py-1 pt-2">
                        <div><!--<img src="https://i.imgur.com/AgAC1Is.jpg" width="18"--><span class="text2"> <strong><?php echo $row['user_name']; ?></strong></span></div>
                        <!--div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div-->
                    </div>
                </div>
            </div>
            <?php
        }
?>
