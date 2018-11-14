<?php
include '../phpScript/db.php';
$output = '';
$search_post = $_POST['search'];
$q = mysqli_query($con, "SELECT * FROM blog
  WHERE post_id LIKE '%".$search_post."%'
  OR post_titile LIKE '%".$search_post."%'
  OR post_desc LIKE '%".$search_post."%'
");

if (mysqli_num_rows($q) > 0) {
  // code...
  $output .= '<div class="table-responsive">
   <table class="table table bordered">
    <tr>
      <th>id</th>
     <th>title</th>
     <th>desc</th>
    </tr>';

    while($row = mysqli_fetch_array($q))
   {
    $output .= '
     <tr>
      <td>'.$row["post_id"].'</td>
      <td>'.$row["post_titile"].'</td>
      <td>'.$row["post_desc"].'</td>
     </tr>
    ';
  }
   echo $output;

} else {


     echo "no data found";

}
 ?>
