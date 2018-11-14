<?php
session_start();

if (isset($_POST['loginbtn'])) {
  // code...
  include_once '../phpScript/db.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    // code...

    echo "<span style='
    position: absolute;
    top: 250px;
    left: 400px;
    padding: 50px;
    background: red;
    font-size: 48px;
    color:#fff;
    border-radius: 20px;
    text-transform: capitalize;
    letter-spacing: 5px;
  '>field are empty</span>";

  } else {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) != 0) {
      // code...
      while ($row = mysqli_fetch_assoc($query)) {
        // code...

        // user data variable

        $id = $row['id'];
        $hobbie = $row['hobbie'];
        $dob = $row['dob'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];

        // session variable

        $_SESSION['id'] = $id;
        $_SESSION['hobbie'] = $hobbie;
        $_SESSION['dob'] = $dob;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        echo $id;
        echo $hobbie;
        echo $dob;
        echo  $username;
        echo $email;
        echo $password;



      }

		header("Location: ../profile/profile.php?id=$id");

    } else {
      echo '<span style="
      position: absolute;
      top: 250px;
      left: 400px;
      padding: 50px;
      background: red;
      font-size: 48px;
      color:#fff;
      border-radius: 20px;
      text-transform: capitalize;
        letter-spacing: 5px;
      ">email or password is incorrect</span>';
    }
  }


}
 ?>
