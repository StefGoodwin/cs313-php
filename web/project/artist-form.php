<?php
require("dbConnect.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/styles.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Form</title>
  </head>
  <body>

    <h1>Artist Add</h1>
    <form id="artistForm" action="insert-artist.php" method="POST">
      <label for="artistName">Artist Name</label><br>
      <input type="text" id="artistName" name="artistName"><br><br>

      <label for="artistMedium">Artist Medium</label><br>
      <input type="text" id="artistMedium" name="artistMedium"><br><br>

      <label for="artistDescription">Artist Description</label><br>
      <input type="text" id="artistDescription" name="artistDescription"><br><br>
      <input type="submit" value="Add to Database">
    </form><br><br>


    <h1>Add Merchandise</h1>
    <form id="artistForm" action="insert-artist.php" method="POST">
      <label for="merchItem">Merchandise Item</label><br>
      <input type="text" id="merchItem" name="merchItem"><br><br>

      <label for="merchSize">Size if Applicable N/A if not</label><br>
      <input type="text" id="merchSize" name="merchSize"><br><br>

      <label for="merchQuanitiy">Quantity</label><br>
      <input type="text" id="merchQuanitiy" name="merchQuanitiy"><br><br>

      <label for="merchPrice">Price</label><br>
      <input type="text" id="merchPrice" name="merchPrice"><br><br>

      <label for="merchDescr">Merchandise Description</label><br>
      <input type="text" id="merchDescr" name="merchDescr"><br>
      <input type="submit" value="Add to Database">
    </form>




    <h1>Remove Artist</h1>
    <form id="artistForm" action="deleteArtist.php" method="POST">
      <label for="artistName">Artist Name</label><br>
      <input type="text" id="artistName" name="artistName"><br><br>
      <input type="submit" value="Delete from Database">

    </form>



  </body>
</html>
