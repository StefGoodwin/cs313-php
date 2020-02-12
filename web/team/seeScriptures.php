<?php
require 'dbConnect.php';
$book = htmlspecialchars($_POST['book']);
$chapter = htmlspecialchars($_POST['chapter']);
$verse = htmlspecialchars($_POST['verse']);
$content = htmlspecialchars($_POST['content']);
$topic =($_POST['topic_name']);
if (isset($_POST[1])) {
  $faith = $_POST[1];

}
if (isset($_POST[2])) {
  $sacrifice = $_POST[2];

}
if (isset($_POST[3])) {
  $charity = $_POST[3];

}


//var_dump($_POST);
?>

<!doctype html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="author" content="Dixie Cravens">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 331 Team Activity</title>
</head>
<body>
<h2>Results</h2>
<?php

?>







</body>
</html>
