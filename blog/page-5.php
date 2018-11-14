<?php session_start();
if (!$_SESSION['username']) {
header("location: ../error/error");
} else {

}
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="device-width" content="device-width-auto">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Portfolio | Huzefa</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.toggle').click(function() {
        $('.toggle').toggleClass('active');
        $('.side-bar').toggleClass('active');
      });

      $('.profile').click(function() {
        $('.full-profile').slideToggle("50", function() {
          $('.full-profile').css("visibility", "visible");
        });
      });

      $('.login-btn').click(function() {
        $('.login-page').slideToggle("400", function() {
          $('.login-page').css("visibility", "visible");
          $('.login-page').css("opacity", "1");
        });
      });

      $(".profile").click(function() {
        $.ajax({
          url: "../profile/profile1.php",
          success: function(result) {
            $(".full-profile").html(result);
          }
        });

      });


    });
  </script>

  <style>
    img[alt="www.000webhost.com"] {
      display: none;
    }
  </style>
</head>
</head>

<body>
  <div class="warpper-1">
    <section class="header">
      <div class="toggle">
      </div>
      <div class="headline">
        <ul>
          <li><a style="font-size: 32px;letter-spacing: 5px; position: absolute;top: 10px;right: 620px;
            " href="../index.php" target="_blank">Huzefa Tai</a></li>
        </ul>
      </div>
      <div class="side-bar">
        <ul>
          <li><a href="../index.php" data-text="Home">Home</a></li>
          <li><a href="../work/work.php" data-text="Work">Work</a></li>
          <li><a href="../about/about.php" data-text="About">About</a></li>
        </ul>
      </div>
      <div class="user_login">
        <div class="user_image">
          <img class="profile" src="http://www.sscok.edu/Foundation/wp-content/uploads/2013/06/Mathews-Tim.jpg">
        </div>
          <?php

        if ($_SESSION['username']) {
          // code...

  echo '
          <div class="full-profile" onload="loadProfile()">
            <p></p>
            <a href="profile/profile.php"></a>

          </div>';
        }
  ?>
        </div>

        <!--      login popup     -->

        <?php if ($_SESSION['username'] == '') {
  echo '<div class="login-btn">
    <span>Login</span>
  </div>
  <div class="login-page">
    <span>Login !</span>

    <form class="" action="../phpScript/login.php" method="post">
      <label for="">Email</label>
      <input type="email" name="email" min="3" maxlength="50">
      <label for="">Password</label>
      <input type="password" name="password" min="3" maxlength="20">
      <button type="submit" name="loginbtn">Login</button>
    </form>
  </div>';
  } else {

  }
  ?>


    </section>

  </div>

  <!--    warpper-3   -->

  <div class="title">
    Blog Related Content
  </div>

  <?php
    include_once '../phpScript/db.php';
    $query = mysqli_query($con , "SELECT * FROM blog ORDER BY post_id LIMIT 21, 5");
    while ($row = mysqli_fetch_assoc($query)) {
      // code...
  ?>

  <div class="warpper-3">
    <div class="container">
      <div class="imageBox">
        <?php
        echo $row['post_image'];
 ?>
      </div>
      <section>
        <h3>  <?php echo $row['post_titile']; ?>  </h3>
        <p>
          <?php echo $row['post_desc']; ?>


        <div class="border"></div>
      </section>

    </div>

  </div>
<?php } ?>

  <div class="pages-grp">
    <small>Pages</small><br>

    <a href="../blog/page-1.php">1</a>
    <a href="../blog/page-2.php">2</a>
    <a href="../blog/page-3.php">3</a>
    <a href="../blog/page-4.php">4</a>
    <a href="../blog/page-5.php" class="active">5</a>
    <a href="../blog/page-6.php">6</a>

  </div>

  <p style="
       font-size: 32px;
       text-align: left;
       margin-left: 100px;
       width: 100%;
       ">Comments Section</p>

  <div id="disqus_thread" style="
         margin: 0 0 50px 100px;
         width: 1100px;
         height: auto;
         "></div>
  <script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMEN class="read-more"T THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
      var d = document,
        s = d.createElement('script');
      s.src = 'https://huzefatai.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  <footer>
    <p class="footer-head">Huzefa Tai</p>
    <article class="">
      All RIghts Are Reserverd From Huzefa Tai &copy 2018
    </article>
    <section>
      <p>Follow Me On Social Media</p> <br><br>
      <main>
        <a href="https://facebook.com/taihuzefa" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/huzefatai" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://youtube.com/huzefatai" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://instagram.com/taihuzefa" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://googleplus.com/taihuzefa" target="_blank"><i class="fab fa-google-plus-square"></i></a>

      </main>

    </section>
  </footer>

</body>

</html>
