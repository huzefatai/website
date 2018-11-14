<?php
session_start();
$error = '';
include '../phpScript/db.php';
if (isset($_POST['post'])) {
  // code..inc.
  $image = $_POST['img'];
  $title = $_POST['post_title'];
  $desc = $_POST['post_desc'];

  $sql = "INSERT INTO blog (post_titile, post_desc, post_image) VALUES ('$title',
'$desc','$image');";

  $query = mysqli_query($con, $sql);

  if ($query == true) {
    // code...
    $error = "blog added";
  }

  $sql1 = "SELECT * FROM `blog` ORDER BY post_id DESC;";
  $query1 = mysqli_query($con, $sql1);
}
 ?>
 <?php
 include '../phpScript/db.php';
  ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Admin Area | Add Posts</title>
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
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
           <a class="navbar-brand" href="#">AdminStrap</a>
         </div>
         <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
             <li><a href="index.php">Dashboard</a></li>
             <li><a href="pages.php">Pages</a></li>
             <li><a href="posts.php">Posts</a></li>
             <li><a href="users.php">Users</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#">Welcome, Brad</a></li>
             <li><a href="login.php">Logout</a></li>
           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </nav>

     <header id="header">
       <div class="container">
         <div class="row">
           <div class="col-md-10">
             <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Add Posts<small>About</small></h1>
           </div>
           <div class="col-md-2">
             <div class="dropdown create">
               <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 Create Content
                 <span class="caret"></span>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                 <li><a type="button" data-toggle="modal" data-target="#addPage">Add Posts</a></li>
                 <li><a href="#">Add Post</a></li>
                 <li><a href="#">Add User</a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </header>

     <section id="breadcrumb">
       <div class="container">
         <ol class="breadcrumb">
           <li><a href="index.php">Dashboard</a></li>
           <li><a href="pages.php">Pages</a></li>
           <li class="active">Add Posts</li>
         </ol>
       </div>
     </section>

     <section id="main">
       <div class="container">
         <div class="row">
           <div class="col-md-3">
             <div class="list-group">
               <a href="index.php" class="list-group-item active main-color-bg">
                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
               </a>
               <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
               <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge"><?php include 'countingofnumber/post_count.php'; ?></span></a>
               <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php include 'countingofnumber/users_count.php'; ?></span></a>
             </div>

             <div class="well">
               <h4>Disk Space Used</h4>
               <div class="progress">
                   <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                       60%
               </div>
             </div>
             <h4>Bandwidth Used </h4>
             <div class="progress">
                 <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                     40%
             </div>
           </div>
             </div>
           </div>
           <div class="col-md-9">
             <!-- Website Overview -->
             <div class="panel panel-default">
               <div class="panel-heading main-color-bg">
                 <h3 class="panel-title">Add Posts</h3>
               </div>
               <div class="panel-body">
                 <form method="post">
                   <div class="form-group">
                     <label>Post Title</label>
                     <input type="text" name="post_title" class="form-control" placeholder="Page Title">
                   </div>
                   <div class="form-group">
                     <label>Post Desc</label>
                     <textarea name="post_desc" class="form-control" placeholder="post_desc"></textarea>
                   </div>
                   <div class="form-group">
                     <label>Post Template</label>
                     <textarea name="img" class="form-control" placeholder="youtube templates"></textarea>
                   </div>
                   <input type="submit" name="post" class="btn btn-default" value="Submit">
                 </form>
               </div>
               </div>

           </div>
         </div>
       </div>
     </section>

     <footer id="footer">
       <p>Copyright AdminStrap, &copy; 2017</p>
     </footer>

     <!-- Modals -->

     <!-- Add Posts -->
     <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <form>
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Add Posts</h4>
       </div>
       <div class="modal-body">

         <?php echo $error; ?>


         <div class="form-group">
           <label>Post Title</label>
           <input type="text" name="post_title" class="form-control" placeholder="Page Title">
         </div>
         <div class="form-group">
           <label>Post Desc</label>
           <textarea name="post_desc" class="form-control" placeholder="post_desc"></textarea>
         </div>
         <div class="form-group">
           <label>Post Template</label>
           <textarea name="post_image" class="form-control" placeholder="youtube templates"></textarea>
         </div>
         <input type="submit" name="edit" class="btn btn-default" value="Submit">
        <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
     </form>
     </div>
   </div>
 </div>

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
