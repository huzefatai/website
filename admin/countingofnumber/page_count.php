<?php $page_count = mysqli_query($con, "SELECT webpage_count FROM webpage_count"); while($page_count1 = mysqli_fetch_array($page_count)) { echo $page_count1['webpage_count']; }?>
