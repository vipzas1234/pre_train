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
<body>
    
    <form action="register.php" method="post">
        
        <div class="wrapper">
            <h2>แก้ไขข้อมูล</h2>

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