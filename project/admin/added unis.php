<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  الجامعات المضافة</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.rtl.min.css">

    <style>

main{
            width: 90%;
            justify-content: center;
        }
 .card {
    background-color: #fff;
    width: 21.25em;
    height: 25.25em;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    border-radius: 10px;
    padding: 25px;
    margin: 20px;
    margin-right:50px;
    transition: 0.7s ease;
    float: right;
   
}

.card:hover {
    transform: scale(1.1);
}

.card .img1 img{
   width: 100%;
   height: 200px;
}

.info {
    text-align: center;
}

.info h3{
    color: #3a6cf4;
    font-size: 1.2em;
    font-weight: 700;
    margin: 10px;
}

    </style>
</head>
<body>
    <center>
        <h3>لوحة تحكم الادمن</h3>
    </center>
    <?php
    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM universities");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card'>
                <div class='img1'>
                    <img src='$row[image]'>
                </div>
               <div class='info'>
                    <h3>$row[U_name]</h3>
                    <p>$row[U_location]</p>
               </div> <br>
                  <div>
                    <a href='delete.php? id=$row[U_id]' class='btn btn-danger'>حذف الجامعة</a>
                    <a href='update.php? id=$row[U_id]' class='btn btn-primary'>تعديل الجامعة</a>
                  </div>
            </div>
        </main>
        </center>
        ";
    }
    
    ?>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>