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
      Artist Name: <input type="text" name="aname" value="artist"><br><br>
<?php
      $statement = $db->query('SELECT username, password FROM note_user');
      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
      {
        echo 'user: ' . $row['username'] . ' password: ' . $row['password'] . '<br/>';
      }
?>
    </form>
  </body>
</html>
