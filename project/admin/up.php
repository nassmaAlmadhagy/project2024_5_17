
<?php

include('connect.php');

if(isset($_POST['update'])){
    $U_ID  = $_POST['U_id'];
    $GOV_ID = $_POST['Gov_id'];
    $NAME  = $_POST['U_name'];
    $PRICE = $_POST['U_location'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    if(!empty($image_name_colge)){
        $image_up = "images/".$image_name;
        $update = "UPDATE universities SET U_id='$U_ID' , Gov_id='$GOV_ID', U_name='$NAME', U_location='$PRICE',`image` ='$image_up' WHERE U_id=$U_ID";
    }else{
        $update = "UPDATE universities SET U_id='$U_ID' , Gov_id='$GOV_ID', U_name='$NAME', U_location='$PRICE' WHERE U_id=$U_ID";
    }
    mysqli_query($conn, $update);
    header('location: added unis.php');
}
if(isset($_POST['update_colge'])){
    $C_ID  = $_POST['C_id'];
    $U_ID  = $_POST['U_id'];
    $C_NAME = $_POST['C_name'];
    $NAME  = $_POST['U_name'];
    $C_location = $_POST['C_location'];
    $IMAGE_colge = $_FILES['image'];
    $image_location_colge = $_FILES['image']['tmp_name'];
    $image_name_colge = $_FILES['image']['name'];
    move_uploaded_file($image_location_colge,'images/'. $image_name_colge);
    if(!empty($image_name_colge)){
        $image_up_colge = "images/".$image_name_colge;
        $update = "UPDATE colleges SET U_id='$U_ID' , C_name='$C_NAME', C_location='$C_location', `image` ='$image_up_colge' WHERE C_id=$C_ID";
    }else{
        $update = "UPDATE colleges SET U_id='$U_ID' , C_name='$C_NAME', C_location='$C_location' WHERE C_id=$C_ID";
    }
    mysqli_query($conn, $update);
    header('location: added_colge.php');
}
if(isset($_POST['update2'])){
    
    $P_ID  = $_POST['P_id'];
    $DEP_ID = $_POST['Dep_id'];
    $P_NAME  = $_POST['P_name'];
    $P_NOTES = $_POST['P_notes'];
    $IMAGE2 = $_FILES['image'];
    $image_location2 = $_FILES['image']['tmp_name'];
    $image_name2 = $_FILES['image']['name'];
    move_uploaded_file($image_location2,'images/'. $image_name2);
    $image_up2 = "images/".$image_name2;
    $update = "UPDATE programs SET P_id='$P_ID', Dep_id='$DEP_ID', P_name='$P_NAME', P_notes='$P_NOTES' ,image='$image_up2' WHERE P_id=$ID";
    mysqli_query($conn, $update);
    header('location: added majs.php');
    
}else{
    echo"no";
}