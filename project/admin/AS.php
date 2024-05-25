<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>amensibrani</title>
    <style>
*{
    padding: 15px;
    margin: 15px;
    box-sizing: border-box;
    scroll-behavior: smooth; 
}

p{
    text-align: right;
    font-family: serif;
    font-weight: 30px;
    font-size: 4ex;
}
    
    p{
        text-align: right;
        font-family: serif;
        font-weight: 30px;
        font-size: 4ex;
    }

    </style>
</head>
<body>
<?php
    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM pro_info");
    while($row = mysqli_fetch_array($result)){
        echo"
  <class='logo'><img src='logo.png' height='120px' width='200px'>
  <nav class='navigation'>
    <center>
      <font color='red' size='7em'> $row[name]  </font>
    </center>
    <center>
<table>
  <tr>
<td><img width='500px' height='500px' src='$row[imag1]'></td>
<td><img width='500px'height='500px' src='$row[imag2]'></td>
<td><img width='500px' height='500px' src='$row[imag3]'></td>
</tr>
</table>
</center>


    <p class='lead text-body-secondary'><p> <b>$row[text1]</p>
    </b>
    <p class='lead text-bodny-secondary'>
      <b> :  العمل المؤهل التابع لهذا التخصص</b>
    </p>
      <h3>
      <ul  align=right' dir='rtl'>
        <font color='red' size='5em'>
      <li>أمان الشبكات</li>
      <li> تطوير البرمجيات الآمنة</li>
      <li> اختبار الاختراق والتقييم الأمني</li>
      <li> إدارة الحوادث الأمنية</li>
      <li> التشفير والحماية القوية للبيانات</li>
    </ul>
  </p>
</font>
</nav>
";
    }
    
    ?>
</body>
</html>