<?php
// [connecting to the server]
$uname = 'root';
$pwd = '';
$server = '127.0.0.1';

$conn = mysqli_connect($server, $uname, $pwd);

if (!$conn) {
    echo 'Sorry error' . mysqli_connect_error();
} else {
    echo 'connected successfully';
}

// [creating a database ]

$query = 'CREATE DATABASE db_name';

if (mysqli_query($conn, $query)) {
    echo 'databse created successfully';
} else {
    echo 'Sorry error' . mysqli_connect_error();
}


// [creating a database table]

$table_query = 'CREATE TABLE table_name (
    ID int(6) AUTO_INCREMENT,
    Fisrt_name varchar(255) Not Null,
    Last_name varchar(255) Not Null,
    Email varchar(255) Not Null,
    Password varchar(255) Not Null,
    Primary Key (`id`);
    )';
?>