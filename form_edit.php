<?php include "database.php"; 
if(isset($_GET['user_ID'])){

    $user_ID = $_GET['user_ID'];

    $query = "SELECT * FROM user WHERE user_ID = $user_ID";
    $result = mysqli_query($conn,$query);

}

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>index</title>
</head>
<style>
    body{
        text-align: center;
    }
    .btn {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    button {
        margin: 20px;
        width: 120px;
        height: 35px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        color: black;
        background: white;
        border: 1px solid black;
        box-shadow: 2px 2px 0 black,
            -2px -2px 0 black,
            -2px 2px 0 black,
            2px -2px 0 black;
        transition: 500ms ease-in-out;
    }

    button:hover {
        box-shadow: 10px 5px 0 black, -10px -5px 0 black;
    }

    button:focus {
        outline: none;
    }

    .wrapper {
        text-align: center;
    }

    input {
        height: 20px;
    }

    label {

        padding-right: 30px;
        font-size: 18px;
    }

    .text {
        margin: 15px;
    }
    .wrapper{
        border: 1;
        background-color: rgb(223, 242, 255);
        text-align: center;
        margin-top: 20px;
        margin-left: 300px;
        margin-right: 300px;
        padding: 0px;
        padding-bottom:20px ;
        
    }
    .submit{
        margin-left: 15px;
        background-color: gray;
        color: white;
        width: 10%;
        height: 30px;
        border-radius: 8px;
    }
</style>
<body>
    
    <form action="edit_db.php" method="post">
        
        <div class="wrapper">
            <h2>แก้ไขข้อมูล</h2>

            <input type="hidden" name="user_ID" placeholder="user_ID" value="<?=$row['user_ID'];?>"><br> 

            <div class="text">
                <label for="">Username</label>
                <input type="text" name="Username" placeholder="Username" value="<?=$row['user_Username'];?>"><br>    
            </div>
    
            <div class="text">
                <label for="">Password</label>
                <input type="text" name="Password" placeholder="Password" value="<?=$row['user_Password'];?>"><br>
            </div>
    
            <div class="text">
                <label for="">Firstname</label>
                <input type="text" name="Firstname" placeholder="Firstname" value="<?=$row['user_Firstname'];?>"><br>
            </div>
    
            <div class="text">
                <label for="">Lastname</label>
                <input type="text" name="Lastname" placeholder="Lastname" value="<?=$row['user_Lastname'];?>"><br>    
            </div>

            <input class="submit" type="submit" value="บันทึก">


        </div>

    </form>
    <?php

        }
    }

    ?>


</body>
</html>