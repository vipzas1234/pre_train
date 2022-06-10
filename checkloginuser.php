<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>

<style>
    body {
        font-size: 20px;
    }

    .wrapper {
        background-color: rgb(223, 242, 255);
        text-align: center;

    }

    button {
        margin-top: 10px;
        background-color: gray;
        color: white;
        width: 100px;
        height: 30px;
        border-radius: 8px;
    }
</style>

<body>
    <?php include "database.php"; ?>

    <?php

    $Username = $_GET['Username'];
    $Password = $_GET['Password'];

    // echo $Username ,"<br>";
    // echo $Password ,"<br>";

    $query = " SELECT * FROM user WHERE user_Username = '$Username' AND user_Password ='$Password' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {


    ?>
        <div class="wrapper">

            <labal>เข้าสู่ระบบสำเร็จ</labal><br>
            <a href='showdata.php'><button>เข้าสู่ระบบ</button></a>
        </div>

    <?php
    } else {
        echo    "<labal>เข้าสู่ระบบไม่สำเร็จ</labal><br>";
        echo    "<a href='login.html'><button>ย้อนหลัง</button></a>";
    }


    ?>


</body>

</html>