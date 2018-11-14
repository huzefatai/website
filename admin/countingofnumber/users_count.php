<?php $count_user = mysqli_query($con, "SELECT count(id) AS total_user_id FROM users"); while($count_user1 = mysqli_fetch_array($count_user)) { echo $count_user1['total_user_id']; } ?>
