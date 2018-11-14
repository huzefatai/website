<?php
session_start();

if (isset($_POST['submit'])) {
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
    $sql = "SELECT admin_id,admin_name,admin_email,admin_password FROM admin WHERE admin_email='$email' AND admin_password='$password';";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) != 0) {
      // code...
      while ($row = mysqli_fetch_array($query)) {
        // code...

        // user data variable

        $id = $row['admin_id'];
        $name = $row['admin_name'];
        $email = $row['admin_email'];
        $password = $row['admin_password'];

        // session variable

        $_SESSION['admin_id'] = $id;
        $_SESSION['admin_name'] = $name;
        $_SESSION['admin_email'] = $email;
        $_SESSION['admin_password'] = $password;

        echo $id;
        echo $hobbie;
        echo $dob;
        echo  $username;
        echo $email;
        echo $password;

      }

		header("Location: index.php?id=$id");

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" method="post" class="well">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
