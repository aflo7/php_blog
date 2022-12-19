<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blog Post</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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

<body>

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
  <!-- Header -->
  <?php
  include_once(INC_HEADER)
  ?>


  <!-- // grid -->
  <div class="w3-row">

    <?php

    getBlogPost();

    ?>

  </div>

  <?php
  include_once(INC_FOOTER)

  ?>
  <script src="./js/validate.js"></script>
</body>

</html>