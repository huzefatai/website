<?php

if (isset($_POST['signup'])) {
  // code...

  include_once '../phpScript/db.php';


  $hobbie = $_POST['hobbie'];
  $dob = $_POST['dob'];
  $uname = $_POST['Username'];
  $email  = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['password1'];

    if ($password != $conpassword) {
      // code...
      echo "password doesnot match";
    }

    else {
      $sql = "INSERT INTO users (hobbie, dob, username, email, password) VALUES ('$hobbie', '$dob', '$uname', '$email', '$password');";
      $query = mysqli_query($con, $sql);

        if ($query == true) {
              // code...
        } else {
            echo "An Eroor Occured";
      }

      $subject = "Email Verification";
      $meassage = "Your Request Have Been Approved By Us\r\n";
      $meassage .= "Stay Tuned For More Update\r\n";
      $meassage .= "Thanks For Signup\r\n";
      $meassage .= "Good Regards Form\r\n";
      $meassage .= "huzefatai.tk";
      $header = "From: noreply@huzefatai.tk";
      $header .= "Cc: np-reply";
      $mail = mail($email, $subject,$meassage, $header);

      if ($mail == true) {
        // code...
        header("location: ../index.php");
      } else {
        echo "An Error Occured";
      }

    }

}
 ?>
