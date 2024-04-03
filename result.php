
<?php
session_start();

setcookie("name","ram", time()+6000);



$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$rePass = $_POST["rePass"];

$_SESSION["name"]= $name;
$_SESSION["email"]= $email;
$_SESSION["pass"]= $pass;
$_SESSION["rePass"]= $rePass;



if (empty($email) || empty($pass) || empty($rePass)) {
    header("location:form.php?field=empty field");
} else {
    $succcesMsg = "Welcome back!! ". $name;
}

echo session_id();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
        }

        fieldset{
            margin-top: 130px;
            height: 50vh;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <fieldset>
            <legend>
                <?php echo $succcesMsg; ?>
            </legend>
            <table cellspacing="5px">
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Re-Password</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $email ?>
                    </td>
                    <td>
                        <?php echo $pass ?>
                    </td>
                    <td>
                        <?php echo $rePass ?>
                    </td>
                    
                </tr>
            </table>
        </fieldset>
    </div>
</body>

</html>