<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<<<<<<< HEAD
    <title>Leave a note</title>
</head>
<body>
    <h2>You can add any note you want to!</h2>
=======
    <title>TODO SITE</title>
</head>
<body>
    <h2>Simple to-do site</h2>
>>>>>>> c1cc9cae043c5e87af96121adc9c956183991f3a
    <?php include './logic.php' ?>
    <div class="forms">
        <form action="addnote.php" method="post">
            Add note <br>
            <textarea name="newtext" cols="30" rows="5" placeholder="Write something"></textarea><br>
            <input type="submit" value="add note">
        </form>
<<<<<<< HEAD
=======
        <form action="updatenote.php" method="post">
            Update note <br>
            <textarea name="updatetext" cols="30" rows="5" placeholder="Write something"></textarea><br>
            <input type="text" name="noteid" placeholder="Enter note id"><br>
            <input type="submit" value="update note">
        </form>
        <form action="deletenote.php" method="post">
            Delete note <br>
            <input type="text" name="noteid" placeholder="Enter note id"><br>
            <input type="submit" value="delete note">
        </form>
>>>>>>> c1cc9cae043c5e87af96121adc9c956183991f3a
    </div>
</body>
</html>