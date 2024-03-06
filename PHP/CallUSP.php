<?php

    require 'db_conn.php';

   $errorempty = false;
    $errormail = false;

    
     $Full_Name    = $_POST['Full_Name'] ;
     $Email        = $_POST['Email'];
     $Phone_Number = $_POST['Phone_Number'];
     $Text         = $_POST['Text']    ; 
   


if (empty($Full_Name)  || empty($Email)        ||   
   empty($Phone_Number) || empty($Text))
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
        
        $to = "kilbil562@gmail.com";
   $Subject= $Full_Name  ; 

       
                 if( mail($to,$Subject,$Text,$Email)){
                     
                        echo "<span><i class='far fa-check-circle'></i></span>
                        <span>لقد تم ارسال الرسالة سيتم الرد في اقرب الاجال    </span>"; 
                          } 
                            else {     
                            echo      " <span> <i class='fas fa-exclamation-triangle'></i></span>
                            <span>  لم يتم ارسال الرسالة  حدث خطأ ما  </span>"; 
                                 }
    
}}

  

?>

<script>
var errorempty = "<?php echo $errorempty;?>";
var errormail =  "<?php echo $errormail ;?>" ;
    
     $('#Demdbloodgroup').removeClass('walidclass');
 
    
    if(errorempty == true){
    $(' #Demdbloodgroup').addClass('walidclass');
     $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
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
              $('.messageT').css({"background-color":"rgba(0,171,102,0.9)", "box-shadow": "0 0 20px rgba(0,171,102,0.9)"}) ;
        $('#NameDemd , #DemdPhone_Number, #TDemd, #DemdEmail').val('');
        $('.messageT').show("slow");   
        $('.messageT').delay(2600).hide("fast");
    
    }

<?php
    $conn = null; 
exit();
    ?>

</script>



   