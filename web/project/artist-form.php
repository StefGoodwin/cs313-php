<?php

require("dbConnect.php");
  $statement = $db->prepare('SELECT id, artist_name FROM artists');
  $statement->execute();

  $stmt = $db->prepare('SELECT id, artist_name FROM artists');
  $stmt->execute();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="styles.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Form</title>
  </head>
  <body>
    <div class="mainContainer">
<div class="artistAddForm">
    <h1>Artist Add</h1>
    <form id="artistForm" action="insert-artist.php" method="POST">
      <label for="artistName">Artist Name</label><br>
      <input type="text" id="artistName" name="artistName" required><br><br>

      <label for="artistMedium">Artist Medium</label><br>
      <input type="text" id="artistMedium" name="artistMedium" required><br><br>

      <label for="artistDescription">Artist Description</label><br>
      <input type="text" id="artistDescription" name="artistDescription" required><br><br>
      <input type="submit" value="Add Artist">
      <br><br>
  </form>
</div>
<div class="merchAddForm">
      <h1>Add Merchandise</h1>
<form id="merchForm" action="insert-merch.php" method="POST">
  <label for="artists">Choose an Artist:</label><br>
  <select id="artistId" name="artistId">
    <?php
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value='{$row['id']}'>{$row['artist_name']}</option>";
    }
    ?>
  </select><br><br>

      <label for="merchItem">Merchandise Item</label><br>
      <input type="text" id="merchItem" name="merchItem" required><br><br>

      <label for="merchSize">Size if Applicable N/A if not</label><br>
      <input type="text" id="merchSize" name="merchSize" required><br><br>

      <label for="merchQuanitiy">Quantity</label><br>
      <input type="text" id="merchQuanitiy" name="merchQuanitiy" required><br><br>

      <label for="merchPrice">Price</label><br>
      <input type="text" id="merchPrice" name="merchPrice" required><br><br>

      <label for="merchDescr">Merchandise Description</label><br>
      <input type="text" id="merchDescr" name="merchDescr"><br><br>
      <input type="submit" value="Add to Merchandise" required>
    </form>
</div>

<div class="merchUpdateForm">
      <h1>Update Merchandise **UNDER CONSTRUCTION**</h1>
<form id="merchForm" action="updateMerch.php" method="POST">
  <label for="artists">Choose an Artist:</label><br>
  <select id="artistId" name="artistId">
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value='{$row['id']}'>{$row['artist_name']}</option>";
    }
    ?>
  </select><br><br>

      <label for="merchItem">Merchandise Item</label><br>
      <input type="text" id="merchItem" name="merchItem" required><br><br>

      <label for="merchSize">Size if Applicable N/A if not</label><br>
      <input type="text" id="merchSize" name="merchSize" required><br><br>

      <label for="merchQuanitiy">Quantity</label><br>
      <input type="text" id="merchQuanitiy" name="quantityUpdated" value="<?php $itemsRow[quantity]?>" required><br><br>

      <label for="merchPrice">Price</label><br>
      <input type="text" id="merchPrice" name="priceUpdated" value="<?php $itemsRow[price]?>" required><br><br>

      <label for="merchDescr">Merchandise Description</label><br>
      <input type="text" id="merchDescr" name="merchDescr"><br><br>
      <input type="submit" value="Update Merchandise" required>
    </form>
</div>

<div class="removeArtistForm">
    <h1>Remove Artist**UNDER CONSTRUCTION**</h1>
    <form id="removeArtistForm" action="deleteArtist.php" method="POST">
      <label for="artistName">Artist Name</label><br>
      <input type="text" id="artistName" name="artistName" required><br><br>
      <input type="submit" value="Delete from Database">

    </form>

</div>
</div>
  </body>
</html>
