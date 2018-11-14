<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/fontawesome.min.css">
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
      })
    })
  </script>
  <title>Thanks For Subscribing</title>
  <style media="screen">
    html {
      scroll-behavior: smooth;
      width: 100%;
      height: 100%;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      font-family: 'Raleway', sans-serif;
      overflow-x: hidden;
    }

    .warpper-1 {
      background-color: #f1c40f;
      width: 1440px;
      box-sizing: border-box;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
    }

    /* header*/
    .header {
      position: fixed;
      background-color: #f1c40f;
      width: 1440px;
      height: 80px;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    .toggle {
      position: relative;
      top: 25px;
      right: 20px;
      margin-right: 15px;
      transition: 0.5s;
      z-index: 1000;
      float: right;
      cursor: pointer;
    }

    .header .toggle::before {
      content: 'Menu';
      background: transparent;
      font-size: 24px;
      width: 10px;
      padding: 10px;
    }

    .header .toggle.active::before {
      content: 'Close';
      color: #ffffff;
      padding: 10px;
      width: 100px;
      height: 100px;
      scroll: hidden;
    }

    .header .side-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: #c93243;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: .1s;
      opacity: 0;
      visibility: hidden;
      z-index: 1;
    }

    .side-bar.active {
      opacity: 1;
      visibility: visible;
    }

    .side-bar.active {
      visibility: visibile;
      opacity: 1;
    }

    ul {
      position: relative;
      list-style: none;
    }

    ul li {
      text-align: center;
    }

    ul li a {
      text-decoration: none;
      color: #f1f1f1;
      font-size: 48px;
      margin-top: 10px;
      letter-spacing: 5px;
    }

    ul li a:hover {
      text-decoration: underline;
    }

    .thanks {
      padding-top: 100px;
      position: absolute;
      left: 250px;
      top: 150px;
    }

    .thanks .title {
      font-size: 42px;
      text-align: center;
      font-style: normal;
      font-weight: bolder;
      margin-bottom: 50px;
    }

    .thanks .desc {
      text-align: center;
      font-weight: lighter;
      font-size: 24px;
    }

    .thanks .desc button {
    padding: 20px;background: #000;
    color: #fff;
    margin-top: 10px;
    font-size: 20px;
    }

    @media screen and (max-width: 800px) {
      .warpper-1 {
        background: #fff;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        max-width: 800px;
      }

      .header {
        position: fixed;
        background-color: #ff793f;
        width: 800px;
        height: 80px;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
        z-index: 10;
      }

      .header nav ul li {
        list-style: none;
        margin: 16px 60px 0;
        font-size: 24px;
      }


      .header nav ul li a:hover {
        text-decoration: underline;
      }

      .header .toggle {
        position: relative;
        top: 28px;
        right: -10px;
        margin-right: 50px;
        transition: 0.5s;
        z-index: 1000;
        float: right;
        cursor: pointer;
      }

      .header .toggle::before {
        content: 'menu';
        color: #fff;
        text-transform: capitalize;
        font-weight: 100;
        font-size: 24px;
      }

      .header .toggle.active::before {
        content: 'close';
        color: #fff;
        text-transform: capitalize;
        font-weight: 100;
        font-size: 24px;
      }

      .header .side-bar {
        position: fixed;
        top: 0;
        left: 0;
        max-width: 800px;
        height: 100vh;
        background: #c93243;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .1s;
        opacity: 0;
        visibility: hidden;
        z-index: 1;
      }

      .side-bar.active {
        opacity: 1;
        visibility: visible;
      }

      ul {
        position: relative;
        list-style: none;
      }

      ul li {
        text-align: center;
      }

      ul li a {
        text-decoration: none;
        color: #f1f1f1;
        font-size: 48px;
        margin-top: 10px;
        letter-spacing: 5px;
      }

      ul li a:hover {
        text-decoration: underline;
      }
    }
  </style>
</head>

<body>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
  <div class="warpper-1">
    <section class="header">
      <div class="toggle">
      </div>
      <div class="headline">
        <ul>
          <li><a href="../index.php" target="_blank">Huzefa Tai</a></li>
        </ul>
      </div>
      <div class="side-bar">
        <ul>
          <li><a href="../index.php" data-text="Home">Home</a></li>
          <li><a href="../work.html" data-text="Work">Work</a></li>
          <li><a href="../about.html" data-text="About">About</a></li>
        </ul>
      </div>
    </section>
  </div>

  <div class="thanks" data-aos="flip-down">
    <div class="title">
      <h1>Thanks For Subscribing</h1>
    </div>

    <div class="desc">
      <p>
        Thanks For Subscribing Our Website. <br>
        Stay Tuned For Latest News
        Pls Co-operate With US
      </p>

        <div class="donation">
          Thanks For Subscribing...
          <br>
        Donate Us For More Updates <br>
          <button type="submit" name="button">Donate Now</button>
        </div>
    </div>
  </div>
</body>

</html>
