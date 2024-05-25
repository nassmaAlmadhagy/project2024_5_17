<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
</head>

<body>
    <!-- تعليق: بداية قسم الصفحة الرئيسي -->
    <div class="container">
        <!-- تعليق: إضافة لوغو الجامعة -->
        <div class="img-logo">
            <img src="image/logo.png" alt="logo" style="max-width: 200px; display: block; margin: 0 auto;">
        </div>
        <!-- تعليق: عنوان القسم -->
        <div class="section-title">قيـَم الجامعـة</div>
        <!-- تعليق: حاوية للتقييمات -->
        <div id="ratings-container"></div>
        <!-- تعليق: تضمين ملفات JavaScript هنا -->
    </div>
    <div class="button-save">
        <button type="button" class="open-modal" data-open="modal1">حفظ التقييم</button>
    </div>
    <!-- تعليق: بداية الكود JavaScript لإنشاء قسم التقييم -->
   
    <!-- تعليق: ربط ملف JavaScript خارجي -->
    <script src="assets/js/script.js">
        
    </script>
</body>

</html>