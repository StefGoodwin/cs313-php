<?php
require ('dbConnect.php');

?>
<!doctype html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="author" content="Dixie Cravens">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 331 Team Activity</title>
</head>
    <body>
        <h2> Scripture Resources</h2>
        <p><?php/*
            foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures')AS $row)
            {
                echo '<b>' . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "-" . '</b>';
                echo '"' . $row['content'] . '"'. "<br/>";
            }*/
          ?>
        </p>

         <form action="results.php" method="post">
            Book: <input type="text" name="book"><br>
            <input type="submit">
          </form>


            <h2>New Scripture</h2>

        <form action="seeScriptures.php" method="post">
            Book: <input type="text" name="book"><br>
            Chapter: <input type="text" name="chapter"><br>
            Verse: <input type="text" name="verse"><br>
            Content: <textarea name="content"></textarea><br>
            Topic/s: <br>
<?php/*
                        foreach ($db->query('SELECT id, name FROM topic;') AS $topics)
                        {
                          echo '<input type="checkbox" name="topic[]" value="' . $topics['name'] .
                                '"><label for="' . $topics['name'] . '">' . $topics['name']. '</label> <br>';


                              }*/
                              ?>
  <?php
    $stmt=$db->prepare('SELECT id, name FROM topic;');
    $stmt->execute();
    $topics = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($topics);
      foreach($topics as $topic) {
    	$topic_id = $topic['id'];
    	$topic_name = $topic['name'];

    	echo "<label for='$topic_id'> $topic_name </label><input type='checkbox' name='$topic_id' value='$topic_name'><br>";

    }

?>

  <input type="submit" value="Add Scripture">

</form>
    </body>

</html>
