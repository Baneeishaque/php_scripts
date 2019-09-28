<?php

if (mysqli_connect("192.254.233.216", "hashf430_ndk", "9895204814")) {
    echo 'success';
    mysqli_select_db("hashf430_ndk");
} else {
    echo 'failure';
}
