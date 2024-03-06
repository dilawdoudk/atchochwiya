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
    
    
     <section  id="CALLus">
             <div class="form">
       
             <form id="form9" action="PHP/CallUSP.php" method="post">
             
              <div id="nameDemd">
                    <input id="NameDemd" class="inname" type="text" name="Full_Name" placeholder=" الإسم أو اللقب و الموضوع  "  required="true">
                </div>
                
                <div id="demdemail">
                    <input id="DemdEmail" class="inemail" type="email" name="Email" placeholder="البريد الالكتروني " required="true">
                </div>
              
                <div id="demdphonenmbr">
                    <input id="DemdPhone_Number" class="inphonenmbr" type="text" name="Phone_Number" placeholder="رقم الهاتف  " min="500000000" max="799999999" required="true">
                </div>
                
                
                    <div id="tDemd">
                    <textarea rows="4"  id="TDemd" class="TtDemd" type="text" name="Full_Name" placeholder= " اكتب الرسالة هنا ...."  required="true"></textarea>
                    
                </div>
                <div class="submitt">
                     <input class="submit1" type="submit" name="submit7" value="ٳرسال"  >  
                </div>
                
                 </form>   
        </div>
         <p class="messageT">
                
            </p>
    </section>
    
    
    
    
    

    <footer id="main-footer" class="text-center3">
        <div class="container4">
            <p>حقوق النشر محفوظة لموقع اتشو شوية &copy; 2021,</p>
        </div>
    </footer>
<script src ="js/callUSjs.js" >  </script>
</body>

</html>