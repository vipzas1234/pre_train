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
        echo    "<labal>แก้ไขสำเร็จ</labal><br>";
        echo    "<a href='showdata.php'><button>เข้าสู่ระบบ</button></a><br>";
        
        // echo json_encode($data);

    }else{
        echo "error";
    }


?>
