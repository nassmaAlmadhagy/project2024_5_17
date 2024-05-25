<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تحديث بيانات</title>
    <link rel="stylesheet" href="TEST.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.rtl.min.css">

</head>

<body>
    <?php
    include('connect.php');
    $ID = $_GET['id'];
    $up = mysqli_query($conn, "select * from universities where U_id =$ID");
    $data2 = mysqli_fetch_array($up);

    ?>
    <?php
    include('connect.php');
    $ID = $_GET['id'];
    $up2 = mysqli_query($conn, "select * from programs where P_id =$ID");
    $data = mysqli_fetch_array($up2);
    ?>
    <?php
    include('connect.php');
    $ID = $_GET['id'];
    $up3 = mysqli_query($conn, "select * from colleges where C_id =$ID");
    $data = mysqli_fetch_array($up3);
    ?>
    <?php
    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM universities");
    ?>
    <?php
    include('connect.php');
    $governorate = mysqli_query($conn, "SELECT * FROM governorate");
    ?>
    <div class="bd-example-snippet bd-code-snippet container mt-5 mb-5" dir="rtl">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">تعديل الجامعة</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">تعديل الكلية</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">تعديل التخصص</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <center>
                        <div class="main">
                            <form action="up.php" method="post" enctype="multipart/form-data">
                                <h2>تحديث بيانات جامعة </h2>
                                <!-- <h6> رقم الجامعة</h6> -->
                                <input type="hidden" name='U_id' value='<?php if(isset($data2['U_id'])){echo $data2['U_id'];} ?>'>
                                <!-- <br> -->
                                <h6> المحافظة </h6>
                                <!-- <input type="text" name='Gov_id' value='<?php if(isset($data2['Gov_id'])){echo $data2['Gov_id'];} ?>'> -->
                                <select name="Gov_id" id="">
                                <?php
                                    while ($row = mysqli_fetch_array($governorate)) {
                                        ?>
                                        <option value="<?php echo $row['Gov_id']?>"
                                        <?php 
                                            if(isset($data2['Gov_id']) && $row['Gov_id']==$data2['Gov_id']){?>selected<?php }?>
                                        ><?php echo $row['Gov_name']?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                                <br>
                                <h6> اسم الجامعة </h6>
                                <input type="text" name='U_name' value='<?php if(isset($data2['U_name'])){echo $data2['U_name'];}?>'>
                                <br>
                                <h6> موقع الجامعة </h6>
                                <input type="text" name='U_location' value='<?php if(isset($data2['U_location'])){echo $data2['U_location'];}?>'>
                                <br>
                                <input type="file" id="file" name='image' style='display:none;'>
                                <button name='update' type='submit'>تحديث</button>
                                <label for="file"> تعديل الصورة</label>
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
                            <form action="up.php" method="post" enctype="multipart/form-data">
                                <h3>تحديث بيانات الكلية </h3>
                                <!-- <h6></h6> -->
                                <!-- <input type="text" name='U_id' value=''> -->
                                <br>
                                <h6> الجامعة </h6>
                                <select name="U_id" id="">
                                    <!-- <option value="" selected></option> -->
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['U_id']?>"
                                        <?php 
                                            if(isset($data['U_id']) && $row['U_id']==$data['U_id']){?>selected<?php }?>
                                        ><?php echo $row['U_name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <h6>اسم الكلية</h6>
                                <input type="hidden" name='C_id' value="<?php if(isset($data['C_id'])){echo $data['C_id'];}  ?>">
                                <input type="text" name='C_name' value="<?php if(isset($data['C_name'])){echo $data['C_name'];}  ?>">
                                <br>
                                <h6> موقع الكلية </h6>
                                <input type="text" name='C_location' value='<?php if(isset($data['C_location'])){echo $data['C_location'];} ?>'>
                                <br>
                                <input type="file" id="file" name='image' style="display:none">
                                <button name='update_colge' type='submit'>تحديث</button>
                                <label for="file"> تعديل الصورة</label>
                                <br><br>
                                <a href="added_colge.php">عرض كل الكليات</a><br>
                            </form>
                        </div>
                    </center>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <center>
                        <div class="main">
                            <form action="up.php" method="post" enctype="multipart/form-data">
                                <h2>تحديث بيانات تخصص</h2>
                                <h6> رقم التخصص</h6>
                                <input type="text" name='P_id' value='<?php echo $data['P_id'] ?>'>
                                <br>
                                <h6> القسم</h6>
                                <input type="text" name='Dep_id' value='<?php echo $data['Dep_id'] ?>'>
                                <br>
                                <h6> اسم التخصص</h6>
                                <input type="text" name='P_name' value='<?php echo $data['P_name'] ?>'>
                                <br>
                                <h6> نبذة</h6>
                                <input type="text" name='P_notes' value='<?php echo $data['P_notes'] ?>'>
                                <br>
                                <input type="file" id="file" name='image' style='display:none;'>
                                <button name='update2'>تحديث </button>
                                <label for="file"> تحديث الصورة </label>
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
    <center>



    </center>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>