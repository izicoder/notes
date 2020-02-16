<?php

include './mysql.php'

$dblink = mysqli_connect($host, $user, $password, $db);

$dblink->query('create table notes (
    id mediumint unsigned not null auto_increment,
    notetext varchar(10000),
    postdate date,
    primary key (id)
    )');

$dblink->close();

?>