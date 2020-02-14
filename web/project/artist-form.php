<?php
require 'dbConnect.php';

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
    <form id="artistForm" action="insert-artist.php" method="POST">
      <label for="artistName">Artist Name</label><br>
      <input type="text" id="artistName" name="artistName"><br><br>

      <label for="artistMedium">Artist Medium</label><br>
      <input type="text" id="artistMedium" name="artistMedium"><br><br>

      <label for="artistDescription">Artist Description</label><br>
      <input type="text" id="artistDescription" name="artistDescription"><br><br>

                  <input type="submit" value="Add to Database">

    </form>
  </body>
</html>
