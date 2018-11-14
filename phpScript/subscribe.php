<?php
include_once '../phpScript/db.php';

if (isset($_POST['btn'])) {
  $email = $_POST['email'];

  if ($email == '') {
    echo "enetr valid email";
  }
  else {
  $sql = "INSERT INTO users_email (email) VALUES ('$email');";
  $query = mysqli_query($con, $sql);

  if ($query == false) {
    echo "error";

  } else {

    header("Location: ../thanks/thanks.php");

  }

  }
}
 ?>
