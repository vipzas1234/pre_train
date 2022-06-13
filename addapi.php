<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addapi</title>
</head>
<style>
    body {
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

    .wrapper {
        border: 1;
        background-color: rgb(223, 242, 255);
        text-align: center;
        margin-top: 20px;
        margin-left: 300px;
        margin-right: 300px;
        padding: 0px;
        padding-bottom: 20px;

    }

    .submit {
        margin-left: 15px;
        background-color: gray;
        color: white;
        width: 10%;
        height: 30px;
        border-radius: 8px;
    }
    select{
        width: 200px;
        height: 30px;
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
                <label for="">path</label>
                <input type="text" name="path" placeholder="path"><br>
            </div>
            <div class="text">
                <label for="">summary</label>
                <input type="text" name="summary" placeholder="summary">

            </div>

            <div class="text">
                <label for="">description</label>
                <input type="text" name="description" placeholder="description"><br>
            </div>

            <div class="text">
                <label for="">operationId</label>
                <input type="text" name="operationId" placeholder="operationId"><br>
            </div>

            <h1>Parameters</h1>
 
            <div class="text">
                <label for="">parameters_name</label>
                <input type="text" name="parameters" placeholder="parameters_Name">
                <label for="">parameters_description</label>
                <input type="text" name="parameters_description" placeholder="คำอธิบาย"><br> <br>
                <label for="">parameters_required</label>
                <select name="parameters_required" placeholder="required(true or false)">
                    <option value="1">ture</option>
                    <option value="2">false</option>
                </select>
                <label for="">parameters_type</label>
                <input type="text" name="parameters_type" placeholder="Type">
            </div>

            <h1>Schema</h1>
            <label for="">Schema_type</label>
                <input type="text" name="Schema_type" placeholder="ประเภท Schema"><br> <br>
            <div class="text">
                <label for="">properties_name</label>
                <input type="text" name="properties_name" placeholder="ชื่อข้อมูล"><br> <br>
                <label for="">properties_type</label>
                <input type="text" name="properties_type" placeholder="ชนิดข้อมูล"><br> <br>
                <label for="">properties_example</label>
                <input type="text" name="properties_example" placeholder="ตัวอย่างข้อมูล">
            </div>

            <input class="submit" type="submit" value="บันทึก">


        </div>
    </form>


</body>

</html>