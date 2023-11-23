<?php
session_start();
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home Page</title>
        <style>
            .card {
    transition: transform 0.3s ease; /* إضافة تأثير انتقالي للتحويل */
    text-decoration: none; /* إزالة الخط تحت النص */
    color: black; /* لون النص الأصلي */
}

.card:hover {
    transform: scale(1.03); /* زيادة حجم الكارد عند التحويل */
    text-decoration: none; /* إزالة الخط تحت النص */
}

        </style>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="view\src\css\styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php 
            include 'view\templates\sideBar.php';
        ?>
        <!-- Page content-->
        <div class="container-fluid">
                    <h1 class="mt-4">subjects</h1>
                    <!-- Flex containers for subjects -->
                    <!-- Flex container for all subjects -->
                    <div class="container mt-4">
    <?php
    // استدعاء الدالة التي تعيد المواد
    // الكود هنا
    // على سبيل المثال، يمكنك استخدام فوريتش لعرض المواد
    $subjects = $_SESSION['subjects']; // افتراضيًا، يجب أن يكون لديك دالة بناءة لجلب المواد

    foreach ($subjects as $subject) {
        echo '<a href="/college_project/subjects?subject='.$subject['subject'].'&grade='.$data['grade'].'&department='.$data['department'].'" class="card-link" style="text-decoration: none;">' ;
        echo '<div class="card mb-4" style="width: 100%;">';
        echo '<div class="card-body d-flex justify-content-between align-items-center">';
        echo '<div>';
        echo '<h5 class="card-title">' . $subject['subject'] . '</h5>';
        echo '</div>';
        echo '<img src="view\src\imgs\courses.svg" class="card-img-top" alt="Subject Image" style="max-width: 7%;">';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
    
    
    ?>
</div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="view\src\js\scripts.js"></script>
    </body>
</html>
