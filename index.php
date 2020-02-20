<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css">

  <title>Notes</title>

</head>

<body>

  <?php include './logic.php'?>
  <div class="form">
    <form action="actions/addnote.php" method="post">
      <textarea name="newtext" cols="30" rows="5" placeholder="Write something"></textarea><br>
      <input type="submit" value="add note">
    </form>
  </div>

</body>
</html>