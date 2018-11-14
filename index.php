<?php session_start();
$_SESSION['username'] = 'admin';
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta name="device-width" content="device-width-auto">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Portfolio | Huzefa</title>
  <link rel="shortcut icon" type="image/png" href="https://drive.google.com/open?id=1A43TrhQfBUV-g1pY1N6A34H2p1EaTUZB"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script type="text/javascript">
  alert("This Is Site Is Under Development If You Get Any Error Comment In Blog");
</script>
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

      $('.signupbtn').click(function() {
        $('.signup').slideToggle(function() {
          $('.signup').css("visibility", "visible");
          $('.signup').css("opacity", "1");
          $('.signup').css("position", "relative");
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
          url: "profile/profile1.php",
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

<body>

  <!--    scripts   -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>




  <!--  body -->


  <!--warpper-1-->
  <div class="warpper-1">
    <div class="header">
      <div class="toggle">
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Huzefa Tai</a></li>
        </ul>
      </nav>
      <div class="side-bar">
        <ul>
          <li><a href="index.php" data-text="Home">Home</a></li>
          <li><a href="work/work.php" data-text="Work">Work</a></li>
          <li><a href="about/about.php" data-text="About">About</a></li>
        </ul>
      </div>
      <div class="user_login">
        <div class="user_image">
          <img class="profile" src="http://www.sscok.edu/Foundation/wp-content/uploads/2013/06/Mathews-Tim.jpg">
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
    </div>
  </div>

  <div class="warpper-2">
    <p class="line ani-typewriter">Hii I'm Huzefa Tai A Full Stack Web Developer <br> At Beginner Level</p>
      <small>Here Are Some My Creation For You</small><br>
      <i class="fas fa-arrow-down"></i>
  </div>


  <div class="warpper2">
    <p>Subscribe For Daily Update</p>
    <nav>
      <form class="" action="phpScript/subscribe.php" method="post">
        <input type="" name="email" placeholder="Enter Your Email" required>
        <button type="submit" name="btn">Subscribe</button>
      </form>
    </nav>
  </div>


<div class="login-btn">
  <span>Login</span>
</div>

  <div class="signup" style="visibility: hidden; opacity: 0; position: absolute;">
    <article class="">

      <span class="title1">Huzefa Tai</span>
      <br>
      <span class="subtitle1">Sign Up ! </span>
    </article>

    <div class="form">
      <form class="" method="post" action="phpScript/signup.php">
        <div class="inputs">
          <div class="input1">
            <label for="Firstname"> Username </label>
            <input type="text" id="username" name="Username" minlength="4">
            <label for="Email">Email</label>
            <input type="email" id="email" name="email">
            <label for="Password"> Hobbie </label>
            <input type="text" id="hobbie" name="hobbie" minlength="4">

    </div>
            <div class="input2">
              <label for="Email"> Date Of Birth (DD-MM-YY) </label>
              <input type="text" id="dob" name="dob">
              <label for="Password">Password</label>
              <input type="password" id="password" name="password" minlength="4">
              <label for="Confirm Password">Confirm Password</label>
              <input type="password" id="password1" name="password1">
    </div>
            </div>

            <button type="submit" name="signup" onclick="signup ()">Submit</button>

      </form>
    </div>
  </div>

  <div class="warpper3">
    <div class="bar">
      <div class="head">
        <p>Signup Now For Latest Updates</p>
      </div>
      <div class="btn-signup">
        <p style="cursor:pointer" class="signupbtn">Sign Up</p>
      </div>
    </div>
  </div>
  <div class="title">
    Blog Related Content
  </div>


  <div class=" warpper-3">
    <div class="container">
      <div class="imageBox">
        <iframe width="600" height="315" src="https://www.youtube.com/embed/uQgfQIVFG5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <section>
        <h3>Unboxing Of Sonata Watch For Women</h3>
        <p>
          Check My Youtube Video Right Now For Buying Link And Product Detalis.. Pls Share
          <i class="fas fa-share-alt-square"></i>
          Like
          <i class="far fa-thumbs-up"></i>
          And Subsribe
          <i class= "fab fa-youtube"></i>

          <br>
          <br>
       Join My Youtube Channel
          <br>
          <a href="https://youtube.com/huzefatai" target="_blank">https://youtube.com/huzefatai</a>
          <br>
       Join My WhatsApp Group
          <a href="https://chat.whatsapp.com/7HxiNv4gxFWCCd9Tdvvw5I" target="_blank">https://chat.whatsapp.com/7HxiNv4gxFWCCd9Tdvvw5I</a>

          <br>
       Join Me On Blogger
          <br>
          <a href="https://huzefatai.blogspot.in" target="_blank">https://huzefatai.blogspot.in</a>
        </p>

        <br>

        <!-- read more buttton-->

        <a href="HTML-Tutorial-For-Beginners...-Lecture-III" class="read-more">Read More</a>


      </section>

    </div>

  </div>


  <div class=" warpper-3">
    <div class="container">
      <div class="imageBox">
        <iframe width="600" height="315" src="https://www.youtube.com/embed/uQgfQIVFG5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <section>
        <h3>Unboxing Of Sonata Watch For Women</h3>
        <p>
          Check My Youtube Video Right Now For Buying Link And Product Detalis.. Pls Share
          <i class="fas fa-share-alt-square"></i>
          Like
          <i class="far fa-thumbs-up"></i>
          And Subsribe
          <i class= "fab fa-youtube"></i>

          <br>
          <br>
       Join My Youtube Channel
          <br>
          <a href="https://youtube.com/huzefatai" target="_blank">https://youtube.com/huzefatai</a>
          <br>
       Join My WhatsApp Group
          <a href="https://chat.whatsapp.com/7HxiNv4gxFWCCd9Tdvvw5I" target="_blank">https://chat.whatsapp.com/7HxiNv4gxFWCCd9Tdvvw5I</a>

          <br>
       Join Me On Blogger
          <br>
          <a href="https://huzefatai.blogspot.in" target="_blank">https://huzefatai.blogspot.in</a>
        </p>

        <br>

        <!-- read more buttton-->

        <a href="HTML-Tutorial-For-Beginners...-Lecture-III" class="read-more">Read More</a>


      </section>

    </div>

  </div>

  <!--view more -->

  <div class="View-More">

    <a href="blog/page-1.php" class="button">View More</a>

  </div>


  <div class="proffesion" style="border-radius: 10px; display: block;">
    <section>
      <div class="first">
        <div class="logo">
          <img src="https://static.thenounproject.com/png/108284-200.png" alt="">
        </div>

          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div>
        <div class="second">
          <div class="logo">
            <img src="https://cdn2.iconfinder.com/data/icons/startup-management/325/Project_management_End_Project_Report-512.png" alt="">
          </div>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="thrid">
            <div class="logo">
              <img src="https://melbournechapter.net/images/transparent-tie-work-6.png" alt="">
            </div>

              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

    </section>

  </div>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
