<?php
$error = $_GET["message"];

if ($error == "error") {
   
    $error= "Password not macthed !!";
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

    <div><?php echo $error; ?></div>
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
        <label for="favColor">Favourite color</label>
        <input type="radio" name="color" value="red"><label for="red">RED</label>&nbsp;
        <input type="radio" name="color" value="blue"><label for="blue">BLUE</label>&nbsp;
        <input type="radio" name="color" value="yellow"><label for="yellow">YELLOW</label>&nbsp;
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>

</html>