<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="calge.css">
    <title>dlilk</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.rtl.min.css">
</head>
<body>
<?php
    include('connect.php');
    $ID = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM colleges WHERE U_id=$ID");
    ?>
    <header>
        <a href="#" class="logo"><img src="الصور/logo.png" height="100px" width="150px"></a>
    </header>
    <section class="projects" id="projects">
        <h2 class="title">الكليات الحديثة </h2>
        
        <div class="content">
                        <div class="content">
                            
                            <BR>
                                <?php
                                while($row = mysqli_fetch_array($result)){
                                    echo "
                                    <div class='content'>
                                        <div class='project-card'>
                                            <div class='project-image'>
                                                <img src='admin/$row[image]'>
                                            </div>
                                        </div>
                                                    <div class='project-title'>
                                                        <p class='project-category'>$row[C_name]</p>
                                                        <p class='project-category'>$row[C_location]</p>
                                                        <strong class='project-info>
                                                            <span>تقدم برامج دراسية في مجال إدارة الأعمال والإقتصاد<br> لتأهيل الطلاب للعمل في مجالات الإدارة والتسويق والإقتصاد.</span>
                                                            // <a href='#' class='more-details'>تخصصاتها</a>
                                                        </strong>
                                                    </div>
                                            </div>";
                                }
                                ?>
                                </div>
                        </div>
                </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>