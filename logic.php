<?php

include './mysql.php';

function rendernote($note) {
    $safeId = htmlspecialchars($note[0]);
    $safeText = htmlspecialchars($note[1]);
    $safeDate = htmlspecialchars($note[2]);

    return <<<rendered
        <div class="note" id="$safeId">
        <span class="notetext">$safeText</span><br>
<<<<<<< HEAD
        <span class="noteinfo"> posted <b>$safeDate</b></span>
        <form action="updatenote.php" method="post">
        <textarea name="updatetext" placeholder="Write something"></textarea><br>
        <input type="hidden" name="noteid" value="$safeId">
        <input type="submit" value="update note">
        </form>
        <form action="deletenote.php" method="post">
        <input type="hidden" name="noteid" value="$safeId">
        <input type="submit" value="delete note">
        </form>
=======
        <span class="noteinfo"> posted <b>$safeDate</b> with id <b>$safeId</b>
        </span>
>>>>>>> c1cc9cae043c5e87af96121adc9c956183991f3a
        </div>
    rendered;
}

$dblink = mysqli_connect($host, $user, $password, $db);

if (!$dblink) {
    echo '<p>Database connection error ' . mysqli_connect_errno() . '<br>';
    echo mysqli_connect_error() . '</p>';
} else {
    $sql = 'select * from notes order by id desc;';
    $result = $dblink->query($sql);
    if ($result->num_rows === 0) {
        echo '<p>There is no notes added yet!</p>';
    } else {
        $notes = $result->fetch_all();
        foreach ($notes as $note) {
            echo rendernote($note);
        }
    }
}

$dblink->close();

?>
