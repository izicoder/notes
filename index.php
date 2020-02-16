<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Leave a note</title>
</head>
<body>
    <h2>You can add any note you want to!</h2>

    <?php include './logic.php' ?>
    <div class="forms">
        <form action="addnote.php" method="post">
            Add note <br>
            <textarea name="newtext" cols="30" rows="5" placeholder="Write something"></textarea><br>
            <input type="submit" value="add note">
        </form>
    </div>
</body>
</html>