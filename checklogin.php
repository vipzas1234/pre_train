<?php include "database.php"; ?>

<?php

$Username = $_GET['Username'];
$Password = $_GET['Password'];

// echo $Username ,"<br>";
// echo $Password ,"<br>";

$query = " SELECT * FROM admin WHERE Username = '$Username' AND Password ='$Password' " ;
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    echo    "<labal>เข้าสู่ระบบสำเร็จ</labal><br>";
    echo    "<a href='showdata.php'><button>เข้าสู่ระบบ</button></a>";

}else{
    echo    "<labal>เข้าสู่ระบบไม่สำเร็จ</labal><br>";
    echo    "<a href='login.html'><button>ย้อนหลัง</button></a>";
}


?>