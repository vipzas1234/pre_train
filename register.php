<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    // echo $Username ,"<br>";
    // echo $Password ,"<br>";
    // echo $Firstname, "<br>";
    // echo $Lastname, "<br>";

    $query = "INSERT INTO `user` ( `user_Username`, `user_Password`, `user_Firstname`, `user_Lastname`) 
                VALUES ( '$Username', '$Password', '$Firstname', '$Lastname');";
    $result = mysqli_query($conn, $query);


    $query1 = "SELECT MAX(user_ID) as user_ID, user_Username, user_Password ,user_Firstname, user_Lastname FROM user";
    $result1 = mysqli_query($conn, $query1);


    $data = array();

    while ($row = mysqli_fetch_array($result1)) {
        $data[] = $row;
    }

    if ($result) {
    ?>
        <div class="wrapper">

            <labal>เข้าสู่ระบบสำเร็จ</labal><br>
            <a href='login.html'><button>เข้าสู่ระบบ</button></a>
        </div>

    <?php
    } else {
        echo "error";
    }


    ?>



</body>

</html>