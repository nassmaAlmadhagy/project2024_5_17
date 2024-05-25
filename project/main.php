<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/styles.css"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title> main dlilk</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <style>
        .rating-item .star {
  color:#ddd;
  font-size:medium;
}
.star {
  font-size: 2em;
  color: #ccc; 
}
.star.active {
  color: #ffcc00;
}
    </style>
</head>

<body>
    <?php
    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM colleges");
    $universities = mysqli_query($conn, "SELECT * FROM universities");
    ?>
    <header>
        <img src="main/logo.png" height="100px" width="150px">
        <nav class="navigation">
            <a href="#">الرئيسية</a>
            <a href="#who">من نحن</a>
            <a href="#contact">تواصل</a>
            <a href="Login.html">تسجيل الدخول</a>
        </nav>
    </header>

    <section>
        <div class="carousel">
            <div class="carousel-container">
                <div class="carousel-item" style="background-image: url('main/dlilconva.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img2.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img3.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img4.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img5.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img6.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img7.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img8.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img9.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img10.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img1.jpg');"></div>
                <div class="carousel-item" style="background-image: url('main/img6.jpg');"></div>
                <!-- Add more carousel items as needed -->
            </div>
            <button class="carousel-btn prev-btn" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-btn next-btn" onclick="nextSlide()">&#10095;</button>
        </div>

    </section>

    <section class="cards" id="services">
        
        <h2 class="title">تعرف على افضل الجامعات اليمنية </h2>
        <a href="univerciteis.html"><button class="carousel-btn1 next-btn1" onclick="nextSlide()">&#10095;</button></a>
        <div class="content">
        <?php
while ($row = mysqli_fetch_array($universities)) {
    $ratings = mysqli_query($conn, "SELECT * FROM rating WHERE u_id=$row[U_id]");
    $numRatings = mysqli_num_rows($ratings);
    $totalValue = 0;
   $to  = 0 ; 
    while ($ratingRow = mysqli_fetch_array($ratings)) {
        $value = $ratingRow['value'];
        $totalValue += $value;

        $to = $totalValue;
    }
    
    $starCount = 0;
    if ($to >= 20) {
        $starCount = 1;
    }if ($to >= 40) {
        $starCount = 2;
    }if ($to >= 60) {
        $starCount = 3;
    }if ($to >= 80) {
        $starCount = 4;
    }if ($to >= 100) {
        $starCount = 5;
    }
    ?>
    <div class="card" style="height: auto;">
        <div class="img1">
            <img src="admin/<?php echo $row['image'] ?>">
        </div>
        <!-- <i class="fa-solid fa-star star active"></i> -->
        <div style="font-size: 10px; width: 100%;  display: flex; justify-content: center;">
            <?php
            // echo ($to);
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $starCount) {
                    echo '<i class="fa-solid fa-star star active"></i>';
                } else {
                    echo '<i class="fa-solid fa-star star"></i>';
                }
            }
            ?>
        </div>
        <div class="info"><br>
            <p>عدد التقييمات: <?php echo $numRatings; ?></p>
            <h3><a href='<?php echo "info_universities.php?id=$row[U_id]"; ?>'><?php echo $row['U_name'] ?></a></h3>
            <p><?php echo $row['U_location'] ?></p>
        </div>
    </div>
<?php
}
?>
        </div>

    </section>

    <section class="projects" id="projects">
        <h2 class="title">تعرف على ابرز التخصصات الحديثة </h2>
        <a href="#"> <button class="carousel-btn1 next-btn2" onclick="nextSlide()">&#10095;</button></a>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="main/syber.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">الأمن السبراني</p>
                    <strong class="project-info">
                        <span>تخصص الأمن السيبراني هو واحد من أفضل التخصصات وأكثرها طلباً في العالم في الوقت الحالي إن لم يكن أفضلهم على الإطلاق.</span>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/Ai.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">الذكاء الاصطناعي</p>
                    <strong class="project-info">
                        <span> عندما يكون مستقبل الذكاء الاصطناعي مرموقاً، بالتأكيد سيحظى خريجو الذكاء الاصطناعي بمستقبل مليء بفرص العمل،</span>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/mica.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">ميكاترونك</p>
                    <strong class="project-info">
                        <span>هندسة الميكاترونكس هو المستقبل بعينه لأنه يدخل في مجالات كثيرة ومتنوعة لا يمكن للإنسان الاستغناء </span>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/asnan.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">طب أسنان</p>
                    <strong class="project-info">
                        <span> هو فرع من فروع الطب، ويختص في معالجة وتشخيص أمراض الفم، والفكين، والأسنان، والأنسجة المحيطة بها.</span>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/busness.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">إدارة أعمال دولية</p>
                    <strong class="project-info">
                        <span>تهتم بالأنشطة المتعلقة بالتجارة سواء كانت سلع أو خدمات بين الدول في الداخل أو الخارج</span>
                        <a href="#" class="more-details">أقرأ المزيد </a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/MIS.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">نظم المعلومات الإدارية</p>
                    <strong class="project-info">
                        <span>هو علم ذات طابع تكنولوجي إداري حديث مهم في العصر الحالي فهو يجمع ما بين تقنية المعلومات والإدارة</span>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title">الكليات الجامعية </h2>
        <a href="calge.html"><button class="carousel-btn1 next-btn3" onclick="nextSlide()">&#10095;</button></a>
        <div class="content">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class='project-card'>
                <div class='project-image'>
                    <img src='admin/$row[image]' />
                </div>
                <div class='project-title'>
                    <p class='project-category'>$row[C_name]</p>
                    <strong class='project-info'>
                        <span>ماهي ابرز التخصصات في $row[C_name] ؟</span><br>
                        <a href='#' class='more-details'>أقرأ المزيد</a>
                    </strong>
                </div>
            </div>";
            }
            ?>


            <!-- <div class="project-card">
                <div class="project-image">
                    <img src="main/mid.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">كلية الطب</p>
                    <strong class="project-info">
                        <spa>ماهي ابرز التخصصات في الكليات الطبية ؟</span><br>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/mange.jpg"/>
                </div>
                <div class="project-title">
                    <p class="project-category">الكلية الإدارية و المالية </p>
                    <strong class="project-info">
                        <span>ماهي ابرز التخصصات في الكليات المالية والادارية ؟</span><br>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/pc.jpg" />
                </div>
                <div class="project-title">
                    <p class="project-category">كلية الحاسوب</p>
                    <strong class="project-info">
                        <span> ماهي ابرز تخصصات كلية الحاسوب؟</span><br>
                        <a href="#" class="more-details">أقرأ المزيد</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="main/human.png" />
                </div>
                <div class="project-title">
                    <p class="project-category">كلية العلوم الانسانية </p>
                    <strong class="project-info">
                        <span>ماهي ابرز تخصصات الكلية الانسانية ؟</span><br>
                        <a href="#" class="more-details">أقرأ المزيد </a>
                    </strong>
                </div>
            </div> -->
        </div>
    </section>

    <section class="intro" id="who">
        <div>
            <h1> من نحن </h1>
            <h4>
                <br>دليلك الجامعي منصة إلكترونية تجمع العديد من الجامعات لمساعدة الطلاب في الحصول
                على معلومات عنها والتسجيل فيها، وتعد هذه المنصة وسيلة سهلة للبحث عن
                الجامعات ومعرفة البرامج
                .الدراسية المتاحة ومتطلبات القبول فيها
            </h4>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">التواصل والاعلان</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+967 733 000 000</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>DLILK@gmail.com</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="main.js.js"></script>
</body>

</html>