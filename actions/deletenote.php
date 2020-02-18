<?php

include '../database/mysql.php';

$id = (int) $_POST['noteid'];

$dblink = mysqli_connect($host, $user, $password, $db);

if (!$dblink) {
    echo '<p>Database connection error ' . mysqli_connect_errno() . '<br>';
    echo mysqli_connect_error() . '</p>';
} else {
    $sqlquery = $dblink->prepare('delete from notes where id=?');
    $sqlquery->bind_param('i', $id);
    if (!$sqlquery) {
        echo 'SQL injection!';
    } else {
        $sqlquery->execute();
    }
}

$dblink->close();

header('Location: ../index.php');
