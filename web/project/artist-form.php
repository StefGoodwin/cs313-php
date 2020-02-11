<?php
require('dbConnect.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/cs313/cs313_stef/styles.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Form</title>
  </head>
  <body>

    <h1>Artist Search</h1>
    <form class="artistform" action="aritst-details.php" method="post">
      Artist Name: <input type="text" name="artist_name" value="artist"><br><br>
                  <input type="submit" value="Submit">

    </form>
  </body>
</html>
