<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> اضافة جامعة او تخصص</title>
    <link rel="stylesheet" href="TEST.css">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.rtl.min.css">
    <style>
        header {
            position: relative;
        }
    </style>
</head>

<body>
    <?php
    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM universities");
    $gov = mysqli_query($conn, "SELECT * FROM governorate");
    ?>
    <!-- <header>
        <img src="../main/logo.png" height="100px" width="150px">

        <nav class="navigation">
            <a href="#">الرئيسية</a>
            <a href="#who">من نحن</a>
            <a href="#contact">تواصل</a>
            <a href="Login.html">تسجيل الدخول</a>
        </nav>
    </header> -->
    <div class="bd-example-snippet bd-code-snippet container mt-5 mb-5" dir="rtl">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">اضافة جامعة</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">اضافة كلية</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">اضافة تخصص</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <center>
                        <div class="main">
                            <form action="test.php" method="post" enctype="multipart/form-data">
                                <h2>اضافة جامعة</h2>
                                <img src="logo.png" alt="logo" width="200px">
                                <!-- <h6> رقم الجامعة</h6>
                                <input type="text" name='U_id'> -->
                                <br>
                                <h6> المحافظة </h6>
                                <select name="Gov_id" id="">
                                    <?php
                                    while ($row = mysqli_fetch_array($gov)) {
                                        echo "<option value='$row[Gov_id]'>$row[Gov_name]</option>";
                                    }
                                    ?>
                                </select>
                                
                                <br>
                                <h6> اسم الجامعة </h6>
                                <input type="text" name='U_name'>
                                <br>
                                <h6> موقع الجامعة </h6>
                                <input type="text" name='U_location'>
                                <br>
                                <input type="file" id="file" name='image' style='display:none;'>
                                <button name='upload'>اضافة✅</button>
                                <label for="file"> شعار الجامعة</label>
                                <br><br>
                                <a href="added unis.php">عرض كل الجامعات</a><br>
                                <a href="univerciteis.php"> الجامعات</a><br>
                            </form>
                        </div>
                    </center>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <center>
                        <div class="main">

                            <form action="test.php" method="post" enctype="multipart/form-data">
                                <h2>اضافة كلية</h2>
                                <img src="logo.png" alt="logo" width="200px">
                                <!-- <h6></h6> -->
                                <!-- <input type="text" name='P_id'> -->
                                <br>
                                <h6> الجامعة</h6>
                                <select name="U_id" id="">
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='$row[U_id]'>$row[U_name]</option> 
                    ";
                                    }
                                    ?>
                                </select>
                                <!-- <input type="text" name='U_id'> -->
                                <br>
                                <h6> اسم الكلية</h6>
                                <input type="text" name='C_name'>
                                <br>
                                <h6>العنوان</h6>
                                <input type="text" name='C_location'>
                                <br>
                                <input type="file" id="imagecolleges" name="imagecolleges" style="display:none;">
                                <button name='addcolge'>اضافة✅</button>
                                <label for="imagecolleges">صورة</label>
                                <br><br>
                                <a href="added_colge.php">عرض كل الكليات</a><br>
                                <!-- <a href="majors.php"> التخصصات</a><br> -->
                            </form>
                        </div>
                    </center>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <center>
                        <div class="main">
                            <form action="test.php" method="post" enctype="multipart/form-data">
                                <h2>اضافة تخصص</h2>
                                <img src="logo.png" alt="logo" width="200px">
                                <h6> رقم التخصص</h6>
                                <input type="text" name='P_id'>
                                <br>
                                <h6> القسم</h6>
                                <input type="text" name='Dep_id'>
                                <br>
                                <h6> اسم التخصص</h6>
                                <input type="text" name='P_name'>
                                <br>
                                <h6> نبذة</h6>
                                <input type="text" name='P_notes'>
                                <br>
                                <input type="file" id="file" name='image' style='display:none;'>
                                <button name='upload2'>اضافة✅</button>
                                <label for="file"> اختيار صورة</label>
                                <br><br>
                                <a href="added majs.php">عرض كل التخصصات</a><br>
                                <a href="majors.php"> التخصصات</a><br>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>