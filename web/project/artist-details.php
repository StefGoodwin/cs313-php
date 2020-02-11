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

    <p><?php
    foreach ($db->query('SELECT artist_id, artist_name, artist_medium, artist_description FROM artists WHERE artist_id = ' . $_GET['artist_id'])  AS $row) {

      echo $row['artist_name'] . " " . $row['artist_medium'] . " " . $row['artist_description'];

    }
?>

        </p>
  </body>
</html>
