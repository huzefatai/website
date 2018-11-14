<?php $count_post = mysqli_query($con, "SELECT count(post_id) AS total FROM blog"); while($count_post1 = mysqli_fetch_array($count_post)) { echo $count_post1['total']; } ?>
