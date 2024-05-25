<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="main.css">
  <title>جامعة الناصر</title>
</head>

<body>
  <?php
  include('connect.php');
  $ID = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM uni_info where U_id =$ID");
  ?>
  <!-- <header>
      <img src="image/nasser.jpg" height="150px" width="150px" align="left"  >
      <img src="logo.png" height="150px" width="210px" align="right"  >
    </header>  -->
  <header>
    <img src="image/logo.png" height="120px" width="200px">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<img src='admin/$row[uni_logo]' height='150px' width='200px'   >";
    ?>
    <nav class="navigation">
      <a href="/">الرئيسية</a>
      <a href="#who">من نحن</a>
      <a href="calge.php">كلياتها</a>
      <a href="<?php echo "calge.php? id=$ID"; ?>">كلياتها</a>
      <a href="/register">تسجيل الدخول</a>
    </nav>
  </header>
  <br><br><br><br><br><br>
  <section>
    <div class="container" dir="rtl" style="padding: 0px 10px 0px 10px;">

      <center>
        <h1 font-family="font1"><?php
                                $universities = mysqli_query($conn, "SELECT * FROM universities where U_id=$ID");
                                while ($row1 = mysqli_fetch_array($universities)) {
                                  echo $row1['U_name'];
                                }
                                ?></h1>
      </center>
      <br><br>
      <div style="display: flex; justify-content: center;">
        <table>
          <tr>
            <td><img src="admin/<?php echo $row['uni_image'] ?>" height="300px" width="450px"></td>
            <td>
              <h4>
                <?php echo $row['definition'] ?>
              </h4>
            </td>
          </tr>
        </table>
      </div>
      <br>
      <h4>
        <?php echo $row['brief'] ?>
      </h4>
      </p>
      <br>
      <h4>
        <?php echo $row['information'] ?>
      </h4><br>
      <!-- <section class="intro" id="who"><br><br><br><br><br> -->
      <h4 class="text">
        <?php echo $row['features'] ?>
      </h4>
      <p>
      <div class="btn-group">
        <a href="Regist.html"><button type="button" class="btn btn-sm btn-outline-secondary">سجل الأن</button></a>
        <a href="chat.html"><button type="button" class="btn btn-sm btn-outline-secondary">أطرح سؤالا</button></a>
        <a href="<?php echo "rating.php? id=$ID";?>"> <button type="button" class="btn btn-sm btn-outline-secondary">قيم الجامعة</button></a>
      </div>
      </p>
      <!-- </section> -->
    <?php
    }
    ?>
    </div>

  </section>
</body>

</html>