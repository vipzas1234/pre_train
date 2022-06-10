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

<?php 
    include "database.php"; 

    $user_ID = $_POST['user_ID'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    // echo $user_ID ,"<br>";
    // echo $Username ,"<br>";
    // echo $Password ,"<br>";
    // echo $Firstname, "<br>";
    // echo $Lastname, "<br>";

    $query = "UPDATE user 
        SET user_Username = '$Username',
        user_Password = '$Password',
        user_Firstname = '$Firstname',
        user_Lastname = '$Lastname' 
        WHERE user_ID = '$user_ID' " ;

    $result = mysqli_query($conn,$query);


    $query1 = "SELECT * FROM user WHERE user_ID = '$user_ID'" ;
    $result1 = mysqli_query($conn,$query1);
    

    $data = array();

    while($row = mysqli_fetch_array($result1)) {
        $data[] = $row;
    }

    if($result){
        ?>
        <div class="wrapper">

            <labal>แก้ไขสำเร็จ</labal><br>
            <a href='showdata.php'><button>เข้าสู่ระบบ</button></a>
        </div>

    <?php
    }else{
        echo "error";
    }


?>


</body>

</html>