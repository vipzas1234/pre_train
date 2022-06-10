<?php include "database.php";

if (isset($_GET['user_ID'])) {

    $user_ID = $_GET['user_ID'];

    $query = "DELETE FROM user WHERE user_ID =$user_ID";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:showdata.php");
    } else {
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
<style>
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
        margin-top: 10px;
        margin-right: 50px;
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

    table {
        margin: 50px;
        border: 1px solid;
    }
</style>

<body>

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
        $result = mysqli_query($conn, $query);
        $num_row = mysqli_num_rows($result);

        if ($num_row > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td width="5%"><?= $row['user_ID']; ?></td>
                    <td width="5%"><?= $row['user_Username']; ?></td>
                    <td width="5%"><?= $row['user_Password']; ?></td>
                    <td width="5%"><?= $row['user_Firstname']; ?></td>
                    <td width="5%"><?= $row['user_Lastname']; ?></td>
                    <td width="2%"><a href="form_edit.php?user_ID=<?= $row['user_ID']; ?>" style="text-decoration: none;color: blue;">แก้ไข</a></td>
                    <td width="2%"><a href="showdata.php?user_ID=<?= $row['user_ID']; ?>" style="text-decoration: none;color: red;">ลบ</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <button style="float:right;"><a href="login.html" style="text-decoration: none;color: black;">ออกระบบ</a></button>



</body>

</html>