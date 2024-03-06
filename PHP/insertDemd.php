<?php

    require 'db_conn.php';

   $errorempty = false;
    $errormail = false;

    
     $Full_Name    = $_POST['Full_Name'] ;
     $Email        = $_POST['Email'];
     $Phone_Number = $_POST['Phone_Number'];
     $Sgroup       = $_POST['Sgroup']  ;
     $Text         = $_POST['Text']    ; 
   


if (empty($Full_Name)  || empty($Email)        ||   
   empty($Phone_Number) ||  $Sgroup == -1   ||
   empty($Text))
{ 
    $errorempty = true ;
    echo "<span> <i class='fas fa-exclamation-triangle'></i></span>
    <span> يرجئ ملأ كل الخانات  </span>"; 
    
    } else {
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
        {
            echo "<span> <i class='fas fa-exclamation-triangle'></i></span>
            <span> يرجئ ادخال بريد الكتروني صالح  </span>"; 
            $errormail = true;
             
        }
    else{ 
        
        $stmt = $conn->prepare(
        "INSERT INTO demd 
                  (Full_Name   , Email,
                  Phone_Number, Sgroup,
                  Text)
        VALUES
                   (:Full_Name , :Email,
                  :Phone_Number,:Sgroup,
                  :Text)
                   ");
        
    
$res=$stmt->execute(['Full_Name'=> $Full_Name   ,
                     'Email'=>  $Email ,
                     'Phone_Number'=> $Phone_Number,
                     'Sgroup'=> $Sgroup,
                     'Text'=>    $Text       
                    ]);
         if($res){
                        echo "<span><i class='far fa-check-circle'></i></span>
                        <span>لقد تم ارسال الطلب سيتم التواصل معكم ان عثرنا على متبرع مناسب   </span>"; 
                          } 
                            else {     
                            echo      " <span> <i class='fas fa-exclamation-triangle'></i></span>
                            <span>  لم يتم ارسال الطلب حدث خطأ ما  </span>"; 
                                 }
    
}}

  

?>

<script>
var errorempty = "<?php echo $errorempty;?>";
var errormail =  "<?php echo $errormail ;?>" ;
    
     $('#Demdbloodgroup').removeClass('walidclass');
 
    
    if(errorempty == true){
    $(' #Demdbloodgroup').addClass('walidclass');
     $('.messageT').css({"background-color":"rgba(255,0,0,0.9)", "box-shadow"
                                :"0 0 20px rgba(255,0,0,0.9)"});
     $('.messageT').show("slow");
    $('.messageT').delay(3000).hide("fast");
}
    
 if(errormail == true){
     
         $('#DemdEmail').addClass('walidclass');
     
         $('.messageT').css({"background-color":"rgba(255,0,0,0.9)", "box-shadow":"0 0 20px rgba(255,0,0,0.9)"}) ;
        $('.messageT').show("slow");
        $('.messageT').delay(3000).hide("fast");
       
     
}
    
    if(errormail == false && errorempty == false){
        $('#NameDemd , #DemdPhone_Number, #TDemd, #DemdEmail').val('');
          $('.messageT').css({"background-color":"rgba(0,171,102,0.9)",         "box-shadow" :"0 0 20px rgba(0,171,102,0.9)"}) ;
        $('.form').hide("fast");
        $('.messageT').show("slow");
        $('#popupDemd').delay(2500).fadeOut('slow');
        $('.messageT').delay(2600).hide("fast");
        $('.form').delay(2600).show("fast");
    }

<?php
    $conn = null; 
exit();
    ?>

</script>



   