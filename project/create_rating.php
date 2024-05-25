<?php
include('connect.php');
if(isset($_POST['submit'])){
    $u_id = $_POST['u_id'];
    $lectures = $_POST['lectures'];
    $responding_students = $_POST['responding_students'];
    $teaching_staff = $_POST['teaching_staff'];
    $courses = $_POST['courses'];
    $security_services = $_POST['security_services'];
    $coordinating_field_trips_training = $_POST['coordinating_field_trips_training'];
    $preparing_students_labor_market = $_POST['preparing_students_labor_market'];
    $inancialcharges = $_POST['inancialcharges'];
    $trips = $_POST['trips'];
    $contests = $_POST['contests'];
    $events = $_POST['events'];
    $studient_activities = $_POST['studient_activities'];
    $sum = $lectures + $responding_students + $teaching_staff + $courses + $security_services +
    $coordinating_field_trips_training + $preparing_students_labor_market + $inancialcharges +
    $trips + $contests + $events + $studient_activities;
    $result = intval($sum / 12);
    // $insert = "INSERT INTO  ratings (u_id, lectures, teaching_staff, courses, security_services, responding_students, coordinating_field_trips_training, preparing_students_labor_market, inancialcharges, trips, contests, events, studient_activities) VALUES ('$u_id','$lectures','$teaching_staff','$courses','$security_services','$responding_students','$coordinating_field_trips_training','$preparing_students_labor_market','$inancialcharges','$trips','$contests','$events','$studient_activities')";
    $insert = "INSERT INTO  rating (u_id, value) VALUES ('$u_id','$result')";
    mysqli_query($conn, $insert);
    header('location: main.php');
}
?>