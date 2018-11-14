<?php $latest_user = mysqli_query($con, "SELECT username,email,timestamp FROM users ORDER BY id DESC LIMIT 5"); while($latest_user1 = mysqli_fetch_array($latest_user)) {?>





    <?php } ?>
