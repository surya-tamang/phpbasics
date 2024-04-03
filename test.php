<?php
session_start();
$empty = $_GET["field"];
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
            box-sizing: border-box;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: crimson;
            padding: 20px;
            border-radius: 14px;
            gap: 20px;
        }

        form input,
        button {
            padding: 8px 15px;
            border-radius: 8px;
            border: none;
        }

        form button:hover {
            background-color: blue;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="formresult.php" method="POST">
            <div class="emptyField">
                <?php
                if ($empty == "empty field") {
                    echo "Please enter the details !!";
                } ?>
            </div>
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="pass" id="pass" placeholder="Enter password">
            <input type="password" name="rePass" placeholder="Re-enter your password">
            <div class="btn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>