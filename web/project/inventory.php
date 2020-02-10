<?php
require('dbConnect.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

foreach($db->query('SELECT id, artist_name, artist_medium, artist_description FROM artists WHERE id = ' . $_GET['id']) AS $row) {

    echo $row['artist_name'] . " " . $row['artist_medium'] . ":" . $row['artist_description'] . "- " . $row['content'];

}
?>
  </body>
</html>
