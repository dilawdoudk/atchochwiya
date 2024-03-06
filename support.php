<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>أتشو شوية</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styling.css">
    <script src="https://kit.fontawesome.com/77b6353fe5.js" crossorigin="anonymous"></script>
     <script src="js/jquery-3.6.0.js"></script>
</head>

<body>
    <nav id="navbar">

        <h1 class="logo">
            <a href="index.php">
                <span class="text-primary">
                    <i class="fas fa-hand-holding-water"></i> أتشو</span> شوية
            </a>
        </h1>

        <ul>
            <il><a href="index.php">الرئيسية</a></il>
            <il><a href="index.php#what">الخدمات</a></il>
            <il><a href="index.php#who">من</a></il>
            <il><a href="callUS.php">اتصل بنا</a></il>
            <il><a href="donating.php">التبرع بالدم </a></il>
             <il><a href="support.php">ادعمنا  </a></il>
             <il><a href="usersC.php">شروط الاستخدام  </a></il>
        </ul>

        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <section id='support' >
        <div class="donationn">

            <h1>كيف يمكنك دعمنا :   </h1>
            
           <ul>
                <li> يمكنك الدعاء لنا بظهر الغيب  .</li>
                <li>نشر الموقع في مواقع التواصل الاجتماعي و بين الاهل و الاصدقاء ربما احدهم احتاج شوية دم لا تدري هذي دنيا  ،</li>
                <li>التبليغ عن اي خطأ بالموقع او اي اضافات مطلوبة عن طريق الاتصال بنا ، </li>
                <li>ان احتجت خدماتنا او اي نوع من الدعم يمكنك الاتصال بنا . </li>
                <li><a href="callUS.php" class="btn"> يمكنك الاتصال بنا. </a></li>
            </ul>
          

        </div>
    </section>

    <footer id="main-footer" class="text-center3">
        <div class="container4">
            <p>حقوق النشر محفوظة لموقع اتشو شوية &copy; 2021,</p>
        </div>
    </footer>
<script >$('#check').on('change', function () {
     if($(this).prop("checked") == true)
         {
             
      $("ul").css("left", "0");
         }
     else{
      $("ul").css("left", "-100%");
     }
     
 }); </script>
</body>

</html>