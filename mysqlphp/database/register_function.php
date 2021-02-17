<?php

include('connection.php');


$password = md5($_POST['password']);
//create a query to insert data
$dataQuery = mysqli_query($link, "insert into users (name, email, password) values('$_POST[name]', '$_POST[email]', '$password')");

//check with mysql_error if query is correct or not
if ($dataQuery) {
    Header("Location: ../homepage.php?name=$_POST[name]");
} else {
    echo "error found: " . mysqli_error($link);
}
