<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة معلومات الجامعة</title>
    <style>
        .main {
            width: 30%;
            box-shadow: 1px 1px 10px silver;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 5px;

        }

        h4 {
            font-family: 'Cairo', sans-serif;
            /* font-size: 25px; */
        }

        input {
            margin-bottom: 15px;
            width: 80%;
            height: 200px;
            padding: 5px;
            font-family: 'Cairo', sans-serif;
            font-size: 15px;
            font-weight: bold;
        }
        select {
            margin-bottom: 15px;
            width: 80%;
            
            padding: 5px;
            font-family: 'Cairo', sans-serif;
            font-size: 15px;
            font-weight: bold;
        }

        button {
            border: none;
            padding: 5px;
            width: 44%;
            height: 49px;
            font-weight: bold;
            color: #fff;
            font-size: 25px;
            background-color: #1AC15C;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
            margin-top: 8px;
        }

        label {
            padding: 5px;
            margin-top: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            background-color: #1F87CF;
            font-family: 'Cairo', sans-serif;
            color: white;
        }

        a {
            text-decoration: none;
            font-size: 20px;
            color: tomato;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }

        .small {
            height: 50px;
        }
    </style>

</head>

<body>
    <?php
    include('connect.php');
    $universities = mysqli_query($conn, "SELECT * FROM universities");
    ?>
    <center>
        <div class="main">
            <form action="test.php" method="post" enctype="multipart/form-data">
                <!-- <h2>اهلا وسهلا</h2> -->
                <img src="logo.png" alt="logo" width="350px">
                <h4> اسم الجامعة </h4>
                <select name="U_id" id="" required>
                    <option value=""></option>
                    <?php
                    while ($row = mysqli_fetch_array($universities)) {
                        echo "<option value='$row[U_id]'>$row[U_name]</option>";
                    }
                    ?>
                </select>
                <!-- <h4>رقم الجامعة</h4>
                <input type="text" class ="small" name='U_id'> -->
                <h4> تعريف</h4>
                <textarea name="definition" id="definition" cols="40" rows="5"></textarea>
                <br>
                <h4> نبذة</h4>
                <textarea name="brief" id="brief" cols="40" rows="5"></textarea>
                <br>
                <h4> معلومات </h4>
                <textarea name="information" id="information" cols="40" rows="5"></textarea>
                <br>
                <h4> مميزات</h4>
                <textarea name="features" id="features" cols="40" rows="5"></textarea>
                <br>
                <!-- <h4> اتلاعغرخعغم</h4>
                <input type="text" name='text5'>
                <br> -->
                <h4> موقع الجامعة </h4>
                <input type="text" class="small" name='uni_location'>
                <br><br><br>
                <input type="file" id="file" name='uni_logo' style='display:none;'>
                <label for="file"> ادراج شعار الجامعة</label>
                <input type="file" id="file2" name='uni_image' style='display:none;'>
                <label for="file2"> ادراج صورة للجامعة</label><br>
                <button name='upload3'> ✅تمت</button>
                <br><br>
            </form>
        </div>
    </center>
</body>

</html>