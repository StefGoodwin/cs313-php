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
            foreach ($db->query('SELECT id, artist_name, artist_medium, artist_description FROM artists')AS $row)
            {
                echo '<b>' . $row['artist_name'] . " " . $row['artist_medium'] . ":" . $row['artist_description'] . "-" . '</b>';
                echo '"' . $row['item'] . '"'. "<br/>";
            }
            ?>
        </p>
  </body>
</html>
