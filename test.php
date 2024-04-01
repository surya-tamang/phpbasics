<?php
$error = $_GET["message"];

if ($error == "error") {
    echo "Password not macthed !!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input {
            margin: 10px 0;
        }

        button {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <form action="result.php" method="POST">
        <input type="text" name="name" placeholder="enter your name">
        <br>
        <input type="email" name="email" placeholder="Your email">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <input type="password" name="re-password" placeholder="Re-type Password">
        <br>
        <Label>Program</Label>
        <select name="program" id="program">
            <option value="BCA">BCA</option>
            <option value="CSIT">CSIT</option>
        </select>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php echo "hello" ?>
</body>

</html>