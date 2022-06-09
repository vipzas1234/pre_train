<?php include "database.php"; 

if(isset($_GET['user_ID'])){

    $user_ID = $_GET['user_ID'];
    
    $query = "DELETE FROM user WHERE user_ID =$user_ID";
    $result = mysqli_query($conn,$query);

    if($result){
        header("location:showdata.php");
    }else{
        echo "Error";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showdata</title>
</head>
<body>
    <button style="float:right; width: 200px; hight:100px;"><a href="login.html" >ออกระบบ</a></button>
    <br><br>
    <table border="1" cellspacing="0"> 
        <tr>
            <th>user_ID</th>
            <th>user_Username</th>
            <th>user_Password</th>
            <th>user_Firstname</th>
            <th>user_Lastname</th>
            <th colspan="2">manage</th>
        </tr>
        <?php 
            $query = "SELECT * FROM user";
            $result = mysqli_query($conn,$query);
            $num_row = mysqli_num_rows($result);
        
            if ($num_row > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td width="5%"><?=$row['user_ID'];?></td>
                    <td width="5%"><?=$row['user_Username'];?></td>
                    <td width="5%"><?=$row['user_Password'];?></td>
                    <td width="5%"><?=$row['user_Firstname'];?></td>
                    <td width="5%"><?=$row['user_Lastname'];?></td>
                    <td width="5%"><a href="form_edit.php?user_ID=<?=$row['user_ID'];?>">แก้ไข</a></td>
                    <td width="5%"><a href="showdata.php?user_ID=<?=$row['user_ID'];?>">ลบ</a></td>
                    </tr>
        <?php
                }
            }
        ?>
    </table>
    <br>



</body>
</html>