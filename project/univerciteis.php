<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="unverciteis.css">
    <title>الجامعات </title>
    <style>
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
<!--
    <header>
        <a href="#" class="logo"><img src="logo.png" height="100px" width="150px"></a>
    </header>

    <section class="cards" id="services">
        <h2 class="title">تعرف على أفضل الجامعات اليمنية </h2>
        <div class="content">
            <div class="card">
                <div class="img1">
                    <img src="image/azal.jpg">
                </div>
                <div class="info">
                    <h3>جامعة أزال للتنمية البشرية</h3>
                    <p>صنعاء الستين الغربي جوار المستشفى الاوروبي</p>
                </div> 
                <br><div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                    <img src="image/nasser.jpg">
                </div>
                <div class="info">
                    <h3>جامعة الناصر</h3>
                    <p>صنعاء الستين السنينة </p>
                </div>
                <br><div class="btn-group">
                    <a href="nasser.html">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button></a>
                    <a href="Login.html">
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button></a>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/natunal.jpg">
                </div>
                <div class="info">
                    <h3>الجامعة الوطنية</h3>
                    <p>صنعاء شارع الرباط</p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/arwa.jpg">
                </div>
                <div class="info">
                    <h3>جامعة الملكة أروى</h3>
                    <p>صنعاء الستين الجنوبي</p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/razi.jpg">
                </div>
                <div class="info">
                    <h3>جامعة الرازي</h3>
                    <p>صنعاء شارع الرباط خلف البنك اليمني للانشاء والتعمير</p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/yemen.jpg">
                </div>
                <div class="info">
                    <h3>جامعة اليمن</h3>
                    <p>صنعاء الستين الغربي امام محطة وهاس </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/nukhbah.jpg">
                </div>
                
                <div class="info">
                    <h3>جامعة النخبة</h3>
                    <p> صنعاء شارع مأرب </p>
                    
                </div>
                <br><br><br><br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/olom.jpg">
                </div>
                <div class="info">
                    <h3>جامعةالعلوم والتكنولوجيا</h3>
                    <p>صنعاء الستين الغربي جوار جسر مذبح</p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/saba.jpg">
                </div>
                <div class="info">
                    <h3>جامعة سبأ</h3>
                    <p>صنعاء جولة عصر </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/salam.jpg">
                </div>
                <div class="info">
                    <h3>جامعة دار السلام </h3>
                    <p>صنعاء الجراف شرق ملعب الثورة </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>

            <div class="card">
                <div class="img1">
                <img src="image/تونتك.jpg">
                </div>
                <div class="info">
                    <h3>جامعةالامارتية</h3>
                    <p>صنعاء الستين الغربي جوار جسر مذبح</p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/المستقبل.jpg">
                </div>
                <div class="info">
                    <h3>جامعة سبأ</h3>
                    <p>صنعاء جولة عصر </p>
                </div>
                <br><br><br><br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/الحكمة.jpg">
                </div>
                <div class="info">
                    <h3>جامعة الحكمة </h3>
                    <p>صنعاء شارع الحرية أمام جامعة صنعاءالجديدة </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>

            <div class="card">
                <div class="img1">
                <img src="image/اللبنانية.jpg">
                </div>
                <div class="info">
                    <h3>جامعة دار السلام </h3>
                    <p>صنعاء الجراف شرق ملعب الثورة </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
            <div class="card">
                <div class="img1">
                <img src="image/ابن النفيس.jpg">
                </div>
                <div class="info">
                    <h3>جامعة دار السلام </h3>
                    <p>صنعاء الجراف شرق ملعب الثورة </p>
                </div>
                <br><div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تسجيل</button>
                  </div>
            </div>
              


    </section>

-->
</body>
</html>