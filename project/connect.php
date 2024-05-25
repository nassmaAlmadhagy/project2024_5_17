<?php

$conn = mysqli_connect('localhost','root','','dlil2') or die('connection failed');

if ($conn){
    // echo "YES";

}
else {
    die ("NO".mysqli_connect_error());
}
?>

