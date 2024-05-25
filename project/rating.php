<!DOCTYPE html>
<html lang="ar" >

<head>
    <!-- تعليق: تحديد ترميز النص والعرض والمقياس الأولي للصفحة -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- تعليق: تحديد العنوان الذي يظهر في شريط العناوين -->
    <title>تقييم الجامعات</title>

    <!-- تعليق: ربط ملفات CSS لـ Bootstrap و Font Awesome و Google Fonts -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <style>
        td {
            border: black 2px solid;
            width: 12%;
            padding: 10px;
        }

        th {
            /* width: 10%; */
            border: black 2px solid;
        }

        input,
        [radio] {
            zoom: 1.2;
        }

        .star-rating input[type="radio"] {
        display: none;
    }
.star-rating{
    display: flex;
    justify-content: center;
}
    .star-rating label {
        font-size: 30px;
        color: #ccc;
        float: left;
    }

    .star-rating input[type="radio"]:checked ~ label {
        color: #ffd700;
    }
    </style>
</head>

<body>
    <?php
    require('connect.php');
    $ID = $_GET['id'];
    ?>
    <form action="create_rating.php" method="post" enctype="multipart/form-data">
        
    <div class="container">
        
            <div class="img-logo">
                <img src="image/logo.png" alt="logo" style="max-width: 200px; display: block; margin: 0 auto;">
            </div>
            <div class="section-title">قيـَم الجامعـة</div>

            <div id="ratings-container">
                
                <input type="hidden" name="u_id" id="u_id" value="<?php echo $ID ?>">
                <h4 class="mb-5">تقييم اكاديمي</h4>
                <div class="star-rating">
                    <h5>المقررات الدراسية</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="lectures" id="lectures-5">
                        <label for="lectures-5">&#9733;</label>
                        <input type="radio" value="90" name="lectures" id="lectures-4">
                        <label for="lectures-4">&#9733;</label>
                        <input type="radio" value="85" name="lectures" id="lectures-3">
                        <label for="lectures-3">&#9733;</label>
                        <input type="radio" value="75" name="lectures" id="lectures-2">
                        <label for="lectures-2">&#9733;</label>
                        <input type="radio" value="50" name="lectures" id="lectures-1">
                        <label for="lectures-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>المحاضرات</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="teaching_staff" id="teaching_staff-5">
                        <label for="teaching_staff-5">&#9733;</label>
                        <input type="radio" value="90" name="teaching_staff" id="teaching_staff-4">
                        <label for="teaching_staff-4">&#9733;</label>
                        <input type="radio" value="85" name="teaching_staff" id="teaching_staff-3">
                        <label for="teaching_staff-3">&#9733;</label>
                        <input type="radio" value="75" name="teaching_staff" id="teaching_staff-2">
                        <label for="teaching_staff-2">&#9733;</label>
                        <input type="radio" value="50" name="teaching_staff" id="teaching_staff-1">
                        <label for="teaching_staff-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>طاقم التدريس</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="courses" id="courses-5">
                        <label for="courses-5">&#9733;</label>
                        <input type="radio" value="90" name="courses" id="courses-4">
                        <label for="courses-4">&#9733;</label>
                        <input type="radio" value="85" name="courses" id="courses-3">
                        <label for="courses-3">&#9733;</label>
                        <input type="radio" value="75" name="courses" id="courses-2">
                        <label for="courses-2">&#9733;</label>
                        <input type="radio" value="50" name="courses" id="courses-1">
                        <label for="courses-1">&#9733;</label>
                    </div>
                </div>
                <h4 class="mt-4 mb-4">تقييم خدمي</h4>
                <div class="star-rating">
                    <h5>الامن</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="security_services" id="security_services-5">
                        <label for="security_services-5">&#9733;</label>
                        <input type="radio" value="90" name="security_services" id="security_services-4">
                        <label for="security_services-4">&#9733;</label>
                        <input type="radio" value="85" name="security_services" id="security_services-3">
                        <label for="security_services-3">&#9733;</label>
                        <input type="radio" value="75" name="security_services" id="security_services-2">
                        <label for="security_services-2">&#9733;</label>
                        <input type="radio" value="50" name="security_services" id="security_services-1">
                        <label for="security_services-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>الاستجابه لاحتياجات الطلاب</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="responding_students" id="responding_students-5">
                        <label for="responding_students-5">&#9733;</label>
                        <input type="radio" value="90" name="responding_students" id="responding_students-4">
                        <label for="responding_students-4">&#9733;</label>
                        <input type="radio" value="85" name="responding_students" id="responding_students-3">
                        <label for="responding_students-3">&#9733;</label>
                        <input type="radio" value="75" name="responding_students" id="responding_students-2">
                        <label for="responding_students-2">&#9733;</label>
                        <input type="radio" value="50" name="responding_students" id="responding_students-1">
                        <label for="responding_students-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>تنسيق النزول الميداني للتدريب</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="coordinating_field_trips_training" id="coordinating_field_trips_training-5">
                        <label for="coordinating_field_trips_training-5">&#9733;</label>
                        <input type="radio" value="90" name="coordinating_field_trips_training" id="coordinating_field_trips_training-4">
                        <label for="coordinating_field_trips_training-4">&#9733;</label>
                        <input type="radio" value="85" name="coordinating_field_trips_training" id="coordinating_field_trips_training-3">
                        <label for="coordinating_field_trips_training-3">&#9733;</label>
                        <input type="radio" value="75" name="coordinating_field_trips_training" id="coordinating_field_trips_training-2">
                        <label for="coordinating_field_trips_training-2">&#9733;</label>
                        <input type="radio" value="50" name="coordinating_field_trips_training" id="coordinating_field_trips_training-1">
                        <label for="coordinating_field_trips_training-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>تاهيل الطلاب لسوق العمل</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="preparing_students_labor_market" id="preparing_students_labor_market-5">
                        <label for="preparing_students_labor_market-5">&#9733;</label>
                        <input type="radio" value="90" name="preparing_students_labor_market" id="preparing_students_labor_market-4">
                        <label for="preparing_students_labor_market-4">&#9733;</label>
                        <input type="radio" value="85" name="preparing_students_labor_market" id="preparing_students_labor_market-3">
                        <label for="preparing_students_labor_market-3">&#9733;</label>
                        <input type="radio" value="75" name="preparing_students_labor_market" id="preparing_students_labor_market-2">
                        <label for="preparing_students_labor_market-2">&#9733;</label>
                        <input type="radio" value="50" name="preparing_students_labor_market" id="preparing_students_labor_market-1">
                        <label for="preparing_students_labor_market-1">&#9733;</label>
                    </div>
                </div>
                <h4 class="mt-4 mb-4">تقييم مالي</h4>
                <hr>
                <div class="star-rating">
                    <h5>الرسوم$</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="inancialcharges" id="inancialcharges-5">
                        <label for="inancialcharges-5">&#9733;</label>
                        <input type="radio" value="90" name="inancialcharges" id="inancialcharges-4">
                        <label for="inancialcharges-4">&#9733;</label>
                        <input type="radio" value="85" name="inancialcharges" id="inancialcharges-3">
                        <label for="inancialcharges-3">&#9733;</label>
                        <input type="radio" value="75" name="inancialcharges" id="inancialcharges-2">
                        <label for="inancialcharges-2">&#9733;</label>
                        <input type="radio" value="50" name="inancialcharges" id="inancialcharges-1">
                        <label for="inancialcharges-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <h4 class="mt-4 mb-4">تقييم الانشظه</h4>
                <div class="star-rating">
                    <h5>الرحلات</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="trips" id="trips-5">
                        <label for="trips-5">&#9733;</label>
                        <input type="radio" value="90" name="trips" id="trips-4">
                        <label for="trips-4">&#9733;</label>
                        <input type="radio" value="85" name="trips" id="trips-3">
                        <label for="trips-3">&#9733;</label>
                        <input type="radio" value="75" name="trips" id="trips-2">
                        <label for="trips-2">&#9733;</label>
                        <input type="radio" value="50" name="trips" id="trips-1">
                        <label for="trips-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>المسابقات</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="contests" id="contests-5">
                        <label for="contests-5">&#9733;</label>
                        <input type="radio" value="90" name="contests" id="contests-4">
                        <label for="contests-4">&#9733;</label>
                        <input type="radio" value="85" name="contests" id="contests-3">
                        <label for="contests-3">&#9733;</label>
                        <input type="radio" value="75" name="contests" id="contests-2">
                        <label for="contests-2">&#9733;</label>
                        <input type="radio" value="50" name="contests" id="contests-1">
                        <label for="contests-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating">
                    <h5>الفعاليات</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="events" id="events-5">
                        <label for="events-5">&#9733;</label>
                        <input type="radio" value="90" name="events" id="events-4">
                        <label for="events-4">&#9733;</label>
                        <input type="radio" value="85" name="events" id="events-3">
                        <label for="events-3">&#9733;</label>
                        <input type="radio" value="75" name="events" id="events-2">
                        <label for="events-2">&#9733;</label>
                        <input type="radio" value="50" name="events" id="events-1">
                        <label for="events-1">&#9733;</label>
                    </div>
                </div>
                <hr>
                <div class="star-rating mb-5">
                    <h5>اشراك الطلاب في نشاطات</h5>
                    <div style="margin-right: auto;">
                        <input type="radio" value="100" name="studient_activities" id="studient_activities-5">
                        <label for="studient_activities-5">&#9733;</label>
                        <input type="radio" value="90" name="studient_activities" id="studient_activities-4">
                        <label for="studient_activities-4">&#9733;</label>
                        <input type="radio" value="85" name="`studient_activities`" id="studient_activities-3">
                        <label for="studient_activities-3">&#9733;</label>
                        <input type="radio" value="75" name="studient_activities" id="studient_activities-2">
                        <label for="studient_activities-2">&#9733;</label>
                        <input type="radio" value="50" name="studient_activities" id="studient_activities-1">
                        <label for="studient_activities-1">&#9733;</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="button-save" style="margin-bottom: 40px;">
            <button type="submit" name='submit' class="open-modal" data-open="modal1">حفظ التقييم</button>
        </div>
    </form>
</body>

</html>