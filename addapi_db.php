<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addapi db</title>
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

    $summary = $_POST['summary'];
    $description = $_POST['description'];
    $operationId = $_POST['operationId'];
    $parameters = $_POST['parameters'];
    $method = $_POST['method'];
    // echo $Username ,"<br>";
    // echo $Password ,"<br>";
    // echo $Firstname, "<br>";
    // echo $Lastname, "<br>";

    $query = "INSERT INTO `api` ( `summary`, `description`, `operationId`, `parameters`,`method_id`) 
                VALUES ( '$summary', '$description', '$operationId', '$parameters','$method');";
    $result = mysqli_query($conn, $query);

    $qcheck = "SELECT method_name FROM method WHERE method_id = $method";
    $rcheck = mysqli_query($conn, $qcheck);
    foreach ($rcheck as $value) {
        $method = $value['method_name'];
    }

    $query1 = "SELECT * FROM api";
    $result1 = mysqli_query($conn, $query1);
    $num_rows = mysqli_num_rows($result1);

    // ข้อมูลส่งเข้าไปไฟล์ json //
    $data = array(

        'swagger' => '2.0',

        'info' => array(
            "description" => 'เซอร์วิสสำหรับการการสร้าง',
            "title" => 'Service for creating, adding/deleting/editing users',
        ),

        'paths' => array(
            'Register' => array(
                $method => array(

                    'summary' => $summary,
                    'description' => $description,
                    'operationId' => $operationId,


                    // ฐานข้อมูลของ parameters ที่มันมีหลายอัน ถ้าแสดงไม่ได้ก็ปล่อยไปเลย
                    // $parameters = array([

                    // ]),

                    'parameters' => [$parameters],
                    'responses' => array(
                        '200' => array(
                            'description' => 'sucssess'
                        ),
                        '401' => array(
                            'description' => 'The access token provided is invalid'
                        ),
                    ),
                )
            )
        ),



    );


    if ($result) {
        echo json_encode($data);

        // ตัวเขียนไฟล์
        // w คือเขียนทับ 
        // r คืออ่าน
        // a คือเขียนต่อ
        // ลองเขียนใช้ a ดูแล้วทำไม่ได้ไฟล์ redoc.html error

        $fp = fopen('test.json', 'w');
        fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
        fclose($fp);



    ?>

        <div class="wrapper">

            <labal>เข้าสู่ระบบสำเร็จ</labal><br>
            <a href='showdata.php'><button>เข้าสู่ระบบ</button></a>
        </div>

    <?php
    } else {
        echo "error";
    }


    ?>



</body>

</html>