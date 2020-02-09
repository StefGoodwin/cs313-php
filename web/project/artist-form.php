<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

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
