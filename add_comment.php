<!-- const submitBtn = document.getElementById("submit-comment-btn")
  submitBtn.disabled = true -->


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

$comment = '\'' . $_POST['comment'] . '\'';
$author = '\'' . $_POST['author'] . '\'';
$username = '\'' . $_POST['username'] . '\'';
$email = '\'' . $_POST['email'] . '\'';
$currentTime = '\'' . $date = date('Y-m-d H:i:s') . '\'';
$postID = $_POST['postID'];

// this page logic works after commit has been validated
// time to add the comment to the database.
$sqlToRun = "INSERT INTO comments (cID,cpID, ccomment, cauthor, cauthemail, cdateposted, capproved, cusername, crevdate) VALUES(NULL,$postID,$comment,$author,$email,$currentTime,0,$username,'2022-12-25 13:11:03')";

// get post from database
$mysqli = @new mysqli(
  $GLOBALS['db_host'],
  $GLOBALS['db_user'],
  $GLOBALS['db_pass'],
  $GLOBALS['db_db']
);

// re enable the submit button
echo `<script> const submitBtn = document.getElementById("submit-comment-btn")
submitBtn.disabled = false </script>`;


if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL";
  exit();
}

if (!$result = $mysqli->query($sqlToRun)) {
  header('Location: /4620/florand/php_blog/blogpost.php?id=' . $postID);
  exit();
}

// mail("someone@example.com","NEW COMMENT","There was a new comment added on post ". $postID); // email the admin when a comment is made
sleep(2);
header('Location: /4620/florand/php_blog/blogpost.php?id=' . $postID); // redirect to blog post after adding post to database
?>