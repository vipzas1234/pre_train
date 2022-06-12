
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addapi</title>
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
    
    <form action="addapi_db.php" method="post">
        <button style="text-align: center;"><a href="showdata.php" style="text-decoration: none;color: black;">ย้อนกลับ</a></button>
        <div class="wrapper">
            <h2>เพิ่มข้อมูล API</h2>

            <label for="">Method</label>
            <select name="method" id="">
                <option value="1">post</option>
                <option value="2">get</option>
                <option value="3">put</option>
                <option value="4">del</option>
            </select>

            <div class="text">
                <label for="">summary</label>
                <input type="text" name="summary" placeholder="summary" ><br>    
            </div>
    
            <div class="text">
                <label for="">description</label>
                <input type="text" name="description" placeholder="description"><br>
            </div>
    
            <div class="text">
                <label for="">operationId</label>
                <input type="text" name="operationId" placeholder="operationId"><br>
            </div>
    
            <div class="text">
                <label for="">parameters</label>
                <input type="text" name="parameters" placeholder="parameters"><br>    
            </div>
        
            <input class="submit" type="submit" value="บันทึก">


        </div>
    </form>


</body>
</html>