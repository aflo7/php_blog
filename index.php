<!DOCTYPE html>
<html>

<?php



  include_once('./includes/define.inc.php');
  include_once('./includes/debug_to_console.php');
  include_once('./includes/extract_string.php');
  include_once('./cs3140database.php');

  // disable in production
  // ini_set('display_errors', '1');
  // ini_set('display_startup_errors', '1');
  // error_reporting(E_ALL);

?>

<head>
  <title>Blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Raleway", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <?php
    include_once(INC_HEADER)
    ?>


    <!-- retrieve posts from the database -->
    <?php
    getHomeScreenPosts()
    ?>
    <!-- Introduction menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-card w3-margin w3-margin-top">
        <img src="https://voyager.cs.bgsu.edu/4620/florand/php_blog/w3images/scientist.png" style="width:100%">
        <div class="w3-container w3-white">
          <h4><b>Andres Flores</b></h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem
            ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

      <!-- popular Posts -->
      <div class="w3-card w3-margin">
        <?php
        getPopularPosts()

        ?>

      </div>



      <hr>



      <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
  </div><br>

  <!-- END blog posts wrapper -->
  </div>

  <!-- Footer -->
  <?php
  include_once(INC_FOOTER)
  ?>

</body>

</html>