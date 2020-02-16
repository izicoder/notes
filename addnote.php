<?php

include './mysql.php';

if (empty($_POST['newtext'])) {
    echo "You should write something!";
} else {

    $finaltext = $_POST['newtext'];

    $dblink = mysqli_connect($host, $user, $password, $db);

    if (!$dblink) {
        echo '<p>Database connection error ' . mysqli_connect_errno() . '<br>';
        echo mysqli_connect_error() . '</p>';
    } else {
        $sqlquery = $dblink->prepare('insert into notes (notetext, postdate) values (?, now());');    
        $sqlquery->bind_param('s', $finaltext);
        if (!$sqlquery) {
            echo "SQL injection!";
        } else {
            $sqlquery->execute();
        }
    }

    $dblink->close();
}

header('Location: index.php')

?>