<?php

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["password"];
$rePass = $_POST["re-password"];
$program = $_POST["program"];

$color = $_POST["color"];

if ($pass != $rePass) {
    echo "password not macthed";
    header("location: http://127.0.0.1/test.php?message=error");
} else {
    echo "Welcome here";
}

switch ($name) {
    case "Red":
        echo "red";
        break;
    case "Blue":
        echo "blue";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <?php echo $name ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <?php echo $email ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <?php echo $pass ?>
                </td>
            </tr>
            <tr>
                <td>Program</td>
                <td>
                    <?php echo $program ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>