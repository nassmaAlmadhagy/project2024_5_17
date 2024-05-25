
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة جامعة</title>
    <style>
        .main{
    width: 60%;
    box-shadow: 1px 1px 10px silver;
    margin-top: 20px;
    padding: 5px;
    
}
h4{
    font-family: 'Cairo', sans-serif;
    font-size: 25px;
}
input{
    margin-bottom: 15px;
    width: 80%;
    height: 200px;
    padding: 5px;
    font-family: 'Cairo', sans-serif;
    font-size: 15px;
    font-weight: bold;
}
button{
    border:none;
    padding: 5px;
    width: 44%;
    height: 49px;
    font-weight: bold;
    color:#fff;
    font-size: 25px;
    background-color: #1AC15C;
    cursor: pointer;
    font-family: 'Cairo', sans-serif;
    margin-top: 8px;
}
label{
    padding: 5px;
    margin-top:5px;
    cursor: pointer;
    font-weight: bold;
    font-size: 25px;
    background-color: #1F87CF;
    font-family: 'Cairo', sans-serif;
    color:white;
}
a{
    text-decoration: none;
    font-size: 20px;
    color:tomato;
    font-family: 'Cairo', sans-serif;
    font-weight: bold;
}
.small{
    height:50px;
}
    </style>

</head>
<body>
    <center>
        <div class="main">
            <form action="test.php" method="post" enctype="multipart/form-data">
                <h2>اهلا وسهلا</h2>
                <img src="logo.png" alt="logo" width="350px">
                <h4> اسم التخصص </h4>
                <input type="text" class ="small" name='name'>
                <h4>رقم التخصص </h4>
                <input type="text" class ="small" name='pro_id'>
                <h4> نبذه</h4>
                <input type="textbox" name='text1'>
                <br>
                <h4> معلومات </h4>
                <input type="text" name='text2'>
                <br>
                <h4> مميزات</h4>
                <input type="text" name='text3'>
                <br>
                <br><br><br>
                <input type="file" id="file" name='imag1' style='display:none;'>
                <label for="file">  ادراج الصورة الاولى</label>
                <input type="file" id="file2" name='imag2' style='display:none;'>
                <label for="file2"> ادراج الصورة الثانية</label><br>
                <input type="file" id="file3" name='imag3' style='display:none;'>
                <label for="file">  ادراج الصورة الثالثة</label>
                <button name='upload4'> ✅تمت</button>
                <br><br>
            </form>
        </div>
        </center>
</body>
</html>