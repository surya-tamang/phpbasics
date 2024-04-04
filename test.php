<?php
session_start();
$empty = $_GET["field"];

$pass = $_POST["pass"];
$rePass = $_POST["rePass"];

if ($pass != $rePass) {
    die("Password doesn't match");
}

// var_dump($_SESSION);
print_r($_SESSION);


/*  
<?php
function checkEven($num){
    try{
    if($num%2==1){
        throw new Exception("Number is odd ");
      }
    }
    
    catch(Exception $e){
    echo "Exception message is: ",$e->getMessage();
    }
    
    finally{
    echo "This is a final block";
    }

}

checkEven(1);


?>
*/

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
            <div class="emptyField" style="color: blue;">
                <?php
                if ($empty == "empty field") {
                    echo "Please enter the details !!";
                    echo "<h4>Password haal</h4>";
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

            <?php
            echo "<div class='fromphp'>" . $name . "</div>";
            ?>
        </form>
    </div>
</body>

</html>