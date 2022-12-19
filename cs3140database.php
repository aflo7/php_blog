<?php

// prod
$GLOBALS['db_host'] = 'voyager.cs.bgsu.edu';
$GLOBALS['db_user'] = 'florand';
$GLOBALS['db_pass'] = 'tJxaKgJ7';
$GLOBALS['db_db'] = 'florand';

// dev
// $GLOBALS['db_host'] = 'localhost';
// $GLOBALS['db_user'] = 'root';
// $GLOBALS['db_pass'] = 'root';
// $GLOBALS['db_db'] = 'cs3140database';

function getHomeScreenPosts()
{

  $mysqli = @new mysqli(
    $GLOBALS['db_host'],
    $GLOBALS['db_user'],
    $GLOBALS['db_pass'],
    $GLOBALS['db_db']
  );

  if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL";
    exit();
  }

  if (!$result = $mysqli->query("SELECT * FROM posts")) {
    exit();
  }
  // grid
  echo '<div class="w3-row">';

  // blog posts wrapper
  echo '<div class="w3-col l8 s12">';
  while ($row = $result->fetch_assoc()) {
    $heading = $row['pheading'];
    $month = $row['pmonth'];
    $day = $row['pday'];
    $year = $row['pyear'];
    $content = $row['pcontent'];
    $postID = $row['pID'];
    $intpid = intval($postID);
    $redirectMe = "'blogpost.php?id=" . $intpid . "'";

    // get the count of all comments for this post
    if (!$countComments = $mysqli->query("SELECT COUNT(*) as count FROM comments where cpid=" . $postID)) {
      exit();
    }
    if (!$numComments = $countComments->fetch_assoc()) {
      exit();
    }

    $monthHash = array();
    $monthHash['01'] = 'January';
    $monthHash['02'] = 'February';
    $monthHash['03'] = 'March';
    $monthHash['04'] = 'April';
    $monthHash['05'] = 'May';
    $monthHash['06'] = 'June';
    $monthHash['07'] = 'July';
    $monthHash['08'] = 'August';
    $monthHash['09'] = 'September';
    $monthHash['10'] = 'October';
    $monthHash['11'] = 'November';
    $monthHash['12'] = 'December';

    // get only the first paragraph (there is 3 paragraphs in each post)
    $start = strpos($content, '<p>');
    $end = strpos($content, '</p>', $start);
    $firstparagraph = substr($content, $start, $end - $start + 4);

    $output = '<div class="w3-card-4 w3-margin w3-white">
    <img src="https://voyager.cs.bgsu.edu/4620/florand/php_blog/w3images/hiker.jpeg" alt="Norway" style="width:100%">
      <div class="w3-container">
        <h3><b>
          ' . $heading . '
        </b></h3>
        <h5>' . $heading . ' <span class="w3-opacity">' . $monthHash[$month] . ' ' . $day . ' ' . $year . '</span></h5>
      </div>

    <div class="w3-container">
      ' . extractString($firstparagraph, '<p>', '</p>') . '...
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p onclick="window.location.href=' . $redirectMe . '"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments </b> <span class="w3-badge">' . $numComments['count'] . '</span></span></p>
        </div>
      </div>
    </div>
  </div>';
    echo $output;
  }
  $mysqli->close();

  echo '</div>';
}
function getBlogPost()
{

  $postID = $_GET['id'];

  $mysqli = @new mysqli(
    $GLOBALS['db_host'],
    $GLOBALS['db_user'],
    $GLOBALS['db_pass'],
    $GLOBALS['db_db']
  );

  if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL";
    exit();
  }

  if (!$result = $mysqli->query("SELECT * FROM posts where pid=" . $postID)) {
    exit();
  }

  $row = $result->fetch_assoc(); //grab the single post which matches the id
  $heading = $row['pheading'];
  $month = $row['pmonth'];
  $day = $row['pday'];
  $year = $row['pyear'];
  $content = $row['pcontent'];

  $monthHash = array();
  $monthHash['01'] = 'January';
  $monthHash['02'] = 'February';
  $monthHash['03'] = 'March';
  $monthHash['04'] = 'April';
  $monthHash['05'] = 'May';
  $monthHash['06'] = 'June';
  $monthHash['07'] = 'July';
  $monthHash['08'] = 'August';
  $monthHash['09'] = 'September';
  $monthHash['10'] = 'October';
  $monthHash['11'] = 'November';
  $monthHash['12'] = 'December';

  // now grab all the comments that match the current post ID
  if (!$result2 = $mysqli->query("SELECT * FROM comments where cpid=" . $postID)) {
    exit();
  }

  $comments = '';

  $i = 0;
  while ($row = $result2->fetch_assoc()) {
    $i = $i + 1;
    $comment = $row['ccomment'];
    $author = $row['cauthor'];
    $commentNumber = $i;

    $comments .= '<div class="w3-card-4 w3-margin w3-white"><p>Comment Number: ' . $commentNumber . '</p><p>' . $comment . '</p><p>' . $author . '</p></div>';
  }

  echo '<class="w3-col l8 s12">';
  $output = '<div class="w3-card-4 w3-margin w3-white">
    <img src="https://voyager.cs.bgsu.edu/4620/florand/php_blog/w3images/hiker.jpeg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>
        ' . $heading . '
      </b></h3>
      <h5>' . $heading . '</h5>
    </div>

          <div class="w3-container">
            ' . $content . '
            <span class="w3-opacity">' . $monthHash[$month] . ' ' . $day . ' ' . $year . '</span>  
          </div>
          
      ' . $comments . '
      <div><button onclick="showFields()">Add comment</button></div>

      <div id="comment-form" class="hidden-fields">
        <form name="comment-form" method="post" action="/4620/florand/php_blog/add_comment.php" onsubmit="return validateForm()">
            Comment: <input name="comment" type="text" placeholder="Add a comment..."/>
            Author: <input name="author" type="text" placeholder="Enter your name..."/>
            Username: <input name="username" type="text" placeholder="Enter your username..."/>
            Email: <input name="email" type="text" placeholder="Enter your email..."/>
            <input type="hidden" name="postID" value="' . $postID . '">
            <input id="submit-comment-btn" type="submit">
        </form>
      </div>' . '</div>';
  echo $output;
}

function getPopularPosts()
{

  $mysqli = @new mysqli(
    $GLOBALS['db_host'],
    $GLOBALS['db_user'],
    $GLOBALS['db_pass'],
    $GLOBALS['db_db']
  );

  if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL";
    exit();
  }

  if (!$result3 = $mysqli->query("SELECT pheading,pauthor,count(posts.pid) as numComments FROM posts JOIN comments WHERE posts.pid = comments.cpid GROUP BY posts.pid ORDER BY numComments DESC")) {
    exit();
  }

  $li = '';
  while ($row = $result3->fetch_assoc()) {
    $heading = $row['pheading'];
    $author = $row['pauthor'];

    $li .= '<li class="w3-padding-16">
              <img src="https://voyager.cs.bgsu.edu/4620/florand/php_blog/w3images/squarehiker.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large">' . $heading . '</span><br>
              <span>' . $author . '</span>     
            </li>';
  }
  $output = '<!-- popular posts heading -->
        <div class="w3-container w3-padding">
          <h4>Popular Posts</h4>
        </div>

        <!-- // post wrapper -->
        <ul class="w3-ul w3-hoverable w3-white">
          ' . $li . '
        </ul>';
  echo $output;
}
