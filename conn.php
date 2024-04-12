<?php

session_start();
$fname = $_POST["fname"];
$lname = $_REQUEST["lname"];

$email = $_POST["email"];
$gender = $_POST["gender"];
$pass = $_POST["pass"];
$rePass = $_POST["rePass"];
// $_COOKIE["name"]= "Shyam";
/*
setcookie("name","shyam");

echo $_COOKIE["name"];
echo $_SESSION["email"];
echo $_SESSION["rePass"];
unset($_SESSION["rePass"]);
echo $_SESSION["rePass"];*/



// ******************sql********************
/*
$uname = "root",
$pwd = "",
$server = "127.0.0.1",

mysql.connect();
mysql.close();
mysql.query();

CREATE DATABASE db_name;
CREATE TABLE table_name:
SELECT id,name,email FROM table_name WHERE email=something@gmail.com

*/

// [CONNECTING TO THE SERVER]

$uname = "root";
$pwd = "";
$server = "127.0.0.1";

$conn = mysqli_connect($server, $uname, $pwd, "employee");
if (!$conn) {
    echo "There is connection error " . mysqli_connect_error();
} else {
    // echo "connected successfully ";
}


// [CREATING A DATABASE]

// $query = "CREATE DATABASE employee";
// if (mysqli_query($conn, $query)) {
//     echo "Database created successfully";
// } else {
//     echo "Sorry !! " . mysqli_connect_error();
// }

// [CREATING A TABLE]

// mysqli_query($conn,"USE DATABASE employee");

// $table_query = "CREATE TABLE user_details (
//     ID int(6) AUTO_INCREMENT,
//     fname varchar(255) Not NULL,
//     lname varchar(255) Not NULL,
//     email varchar(255) Not NULL,
//     gender varchar(255) Not NULL,
//     pwd varchar(255) Not NULL,
//     PRIMARY KEY (`ID`)
//     )";

// if (mysqli_query($conn, $table_query)) {
//     echo "Table created successfully";
// } else {
//     echo "Sorry !! " . mysqli_connect_error();
// }

// $query = "INSERT INTO user_details (fname,lname,email,gender,pwd) values('" . $fname . "','" . $lname . "','" . $email . "','" . $gender . "','" . $pass . "')";

// mysqli_query($conn, $query);


// $authenticate = "SELECT *FROM user_details WHERE email='" . $email . "' AND pwd='" . $pass ."'";

$authenticate = "SELECT * FROM user_details WHERE email='$email' AND pwd='$pass'";
$result = mysqli_query($conn, $authenticate);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["fname"] . " " . $row["lname"];
        echo $row["gender"];
    }
}


// if (!$result) {
//     // Query execution failed
//     echo "Error: " . mysqli_error($conn);
// } else {
//     // Query executed successfully
//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo $row["fname"] . " " . $row["lname"];
//             echo $row["gender"];
//         }
//     } else {
//         // No matching records found
//         echo "No user found with this email and password.";
//     }
// }

mysqli_close($conn);

$query1 = "UPDATE user_details set fieldname='value' WHERE ID=1";

$query2 = "DELETE FROM employee WHERE ID=2";

?>