<?php

$link = mysqli_connect('localhost', 'root', '', 'phpmysql');

if ($link) {
    echo "connection successful";
} else {
    echo "connection failed";
}
