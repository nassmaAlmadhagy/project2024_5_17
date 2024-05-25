<?php

include('connect.php');

if(isset($_POST['upload'])){

    // $U_ID  = $_POST['U_id'];
    $GOV_ID = $_POST['Gov_id'];
    $NAME  = $_POST['U_name'];
    $PRICE = $_POST['U_location'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  universities (Gov_id, U_name, U_location ,image ) VALUES ('$GOV_ID','$NAME','$PRICE','$image_up')";
    mysqli_query($conn, $insert);
    header('location: index.php');
    if(move_uploaded_file($image_location ,'images/'.$image_name)){
        echo "<script>alert('تمت الاضافة')</script>";
    }
    else{
        echo "<script>alert('حدث خطأ')</script>";
    }
}

if(isset($_POST['addcolge'])){
    $U_id2 = $_POST['U_id'];
    $C_name  = $_POST['C_name'];
    $C_location  = $_POST['C_location'];
    $IMAGE_colge = $_FILES['imagecolleges'];
    $image_location_colge = $_FILES['imagecolleges']['tmp_name'];
    $image_name_colge = $_FILES['imagecolleges']['name'];
    move_uploaded_file($image_location_colge,'images/'. $image_name_colge);
    $image_up_colge = "images/".$image_name_colge;
    // print_r($_FILES['imagecolleges']) ;
    $insert_colge = "INSERT INTO  colleges (U_id, C_name, C_location ,image ) VALUES ('$U_id2','$C_name','$C_location','$image_up_colge')";
    mysqli_query($conn, $insert_colge);
    header('location: index.php');
    if(move_uploaded_file($image_location_colge ,'images/'.$image_name_colge)){
        echo "<script>alert('تمت الاضافة')</script>";
    }
    else{
        echo "<script>alert('حدث خطأ')</script>";
    }
}
if(isset($_POST['upload2'])){
    $P_ID  = $_POST['P_id'];
    $DEP_ID = $_POST['Dep_id'];
    $P_NAME  = $_POST['P_name'];
    $P_NOTES = $_POST['P_notes'];
    $IMAGE2 = $_FILES['image'];
    $image_location2 = $_FILES['image']['tmp_name'];
    $image_name2 = $_FILES['image']['name'];
    move_uploaded_file($image_location2,'images/'. $image_name2);
    $image_up2 = "images/".$image_name2;
    $insert = "INSERT INTO  programs (P_id, Dep_id, P_name, P_notes ,image ) VALUES ('$P_ID','$DEP_ID','$P_NAME','$P_NOTES','$image_up2')";
    mysqli_query($conn, $insert);
    header('location: index.php');
    if(move_uploaded_file($image_location2 ,'images/'.$image_name2)){
        echo "<script>alert('تمت الاضافة')</script>";
    }
    else{
        echo "<script>alert('حدث خطأ')</script>";
    }
}

if(isset($_POST['upload3'])){
    $U_ID = $_POST['U_id'];
    $UNI_LOGO = $_FILES['uni_logo'];
    $image_location3 = $_FILES['uni_logo']['tmp_name'];
    $image_name3 = $_FILES['uni_logo']['name'];
    move_uploaded_file($image_location3,'images/'. $image_name3);
    $image_up3 = "images/".$image_name3;
    $UNI_IMAGE = $_FILES['uni_image'];
    $image_location4 = $_FILES['uni_image']['tmp_name'];
    $image_name4 = $_FILES['uni_image']['name'];
    move_uploaded_file($image_location4,'images/'. $image_name4);
    $image_up4 = "images/".$image_name4;
    // $UNI_NAME= $_POST['uni_name'];
    $definition= $_POST['definition'];
    $brief= $_POST['brief'];
    $information= $_POST['information'];
    $features= $_POST['features'];
    $UNI_LOCATION= $_POST['uni_location'];
    $insert = "INSERT INTO  uni_info (U_id, uni_logo, uni_image, definition ,brief ,information ,features ,uni_location ) 
    VALUES ('$U_ID','$image_up3','$image_up4','$definition','$brief','$information','$features','$UNI_LOCATION')";
    mysqli_query($conn, $insert);
    header('location: univerinfo.php');
    if(move_uploaded_file($image_location3 ,'images/'.$image_name3)){
        echo "<script>alert('تمت الاضافة')</script>";
    }
    else{
        echo "<script>alert('حدث خطأ')</script>";
    }
}
if(isset($_POST['upload4'])){
    $PRO_ID = $_POST['pro_id'];

    $IMAG1 = $_FILES['imag1'];
    $image_location5 = $_FILES['imag1']['tmp_name'];
    $image_name5 = $_FILES['imag1']['name'];
    move_uploaded_file($image_location5,'images/'. $image_name5);
    $image_up5 = "images/".$image_name5;

    $IMAG2 = $_FILES['imag2'];
    $image_location6 = $_FILES['imag2']['tmp_name'];
    $image_name6 = $_FILES['imag2']['name'];
    move_uploaded_file($image_location6,'images/'. $image_name6);
    $image_up6 = "images/".$image_name6;

    $IMAG3 = $_FILES['imag3'];
    $image_location7 = $_FILES['imag3']['tmp_name'];
    $image_name7 = $_FILES['imag3']['name'];
    move_uploaded_file($image_location7,'images/'. $image_name7);
    $image_up7 = "images/".$image_name7;


    $NAME= $_POST['name'];
    $TEXT1= $_POST['text1'];
    $TEXT2= $_POST['text2'];
    $TEXT3= $_POST['text3'];

    //$IMAGE2 = $_FILES['image'];
   // $image_location2 = $_FILES['image']['tmp_name'];
    //$image_name2 = $_FILES['image']['name'];
   // move_uploaded_file($image_location2,'images/'. $image_name2);
   // $image_up2 = "images/".$image_name2;

    $insert = "INSERT INTO  pro_info (pro_id, name,text1 ,text2 ,text3, imag1, imag2 , imag3 ) 
    VALUES ('$PRO_ID','$NAME','$TEXT1','$TEXT2','$TEXT3','$image_up5','$image_up6', '$image_up7')";
    mysqli_query($conn, $insert);
    header('location: proginfo.php');

    if(move_uploaded_file($image_location5 ,'images/'.$image_name5)){
        echo "<script>alert('تمت الاضافة')</script>";
    }
    else{
        echo "<script>alert('حدث خطأ')</script>";
    }
}
?>