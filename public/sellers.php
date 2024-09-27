<?php

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('sql12.freemysqlhosting.net', 'sql12733830', 'YSANliPNdt','sql12733830');

// get the post records

$name = $_POST['name'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$photo = $_POST['photo'];
$vendor_photo = $_POST['vendor_photo'];

// database insert SQL code
$sql = "INSERT INTO `vendor` (`name`, `sex`, `address`, `phone`, `category`, `photo`, `vendor_photo`) VALUES ('$name', '$sex', '$address', '$phone', '$category', '$photo', '$vendor_photo')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 0 20px;
        }
        .checkmark {
            font-size: 100px;
            color: green;
            margin-bottom: 20px;
        }
        footer {
            margin-top: 40px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

    <header>
        <h1>THANK YOU!</h1>
    </header>

    <div>
        <div class="checkmark">&#10004;</div>
        <p style="font-size: 25px;">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
    </div>

    <footer>
        <p>&copy; Gurjot Singh - 270128223552</p>
    </footer>

</body>
</html>';
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>

