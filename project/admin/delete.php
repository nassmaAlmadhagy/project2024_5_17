<?php
include('connect.php');
$ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM programs WHERE P_id=$ID");
header('location: added majs.php')
?>
<?php
include('connect.php');
$ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM universities WHERE U_id=$ID");
header('location: added unis.php')
?>
<?php
include('connect.php');
$ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM colleges WHERE C_id=$ID");
header('location: added_colge.php')
?>