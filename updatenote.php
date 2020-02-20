<?php

include './mysql.php';

if (empty($_POST['updatetext'])) {
    echo "You should write something!";
} else {

    $noteid = (int) $_POST['noteid'];
    $updatetext = $_POST['updatetext'];

    $dblink = mysqli_connect($host, $user, $password, $db);

    if (!$dblink) {
        echo '<p>Database connection error ' . mysqli_connect_errno() . '<br>';
        echo mysqli_connect_error() . '</p>';
    } else {
        $sqlquery = $dblink->prepare('update notes set notetext=? where id=?');
        $sqlquery->bind_param('si', $updatetext, $noteid);
        if (!$sqlquery) {
            echo 'SQL injection!';
        } else {
            $sqlquery->execute();
        }
    }

    $dblink->close();
}

header('Location: index.php');
