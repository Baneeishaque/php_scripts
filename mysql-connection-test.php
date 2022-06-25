<?php

$mysqli_connection = mysqli_connect("127.0.0.1", "root", "1");
if ($mysqli_connection) {
    echo 'connection success';
    if (mysqli_select_db($mysqli_connection, "information_schema")) {
        echo '\n' . 'database selection success';
    } else {
        echo '\n' . 'database selection failure';
    }
} else {
    echo 'connection failure';
}
