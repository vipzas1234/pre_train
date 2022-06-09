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
                VALUES ( '$Username', '$Password', '$Firstname', '$Lastname');" ;
    $result = mysqli_query($conn,$query);


    $query1 = "SELECT MAX(user_ID) as user_ID, user_Username, user_Password ,user_Firstname, user_Lastname FROM user" ;
    $result1 = mysqli_query($conn,$query1);
    

    $data = array();

    while($row = mysqli_fetch_array($result1)) {
        $data[] = $row;
    }

    if($result){
        echo    "<labal>บันทึกสำเร็จ !!!</labal><br>";
        echo    "<a href='showdata.php'><button>เข้าสู่ระบบ</button></a>";
        
        // echo json_encode($data);
    }else{
        echo "error";
    }


?>
