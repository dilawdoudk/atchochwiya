<?php

    require 'db_conn.php';
$errorempty = false;
    $errormail = false;
$postCount = 0;
    
  $Full_Name = $_POST['Full_Name']     ; $Email        = $_POST['Email'];
  $P_Word    = $_POST['P_Word']        ; $Phone_Number = $_POST['Phone_Number'];
  $Wilaya    = $_POST['Wilaya']        ; $Dayra        = $_POST['Dayra'];
  $Baladiya  = $_POST['Baladiya']      ; $Sgroup       = $_POST['Sgroup'];
  $Cm_Time   = $_POST['Cm_Time']       ; $Cm_Way       = $_POST['Cm_Way'];
   $WilayaV    = $_POST['WilayaV']     ; $DayraV        = $_POST['DayraV'];
    $BaladiyaV  = $_POST['BaladiyaV']  ;
    
   
if (empty($Full_Name)  || empty($Email)        ||   
    empty($P_Word)     || empty($Phone_Number) ||
    $WilayaV == -1     || $BaladiyaV == -1      ||   
    $DayraV == -1      || $Cm_Way == -1         ||
    $Cm_Time  == -1    || $Sgroup == -1         
   )
{ 
    $errorempty = true ;
    echo "<span> <i class='fas fa-exclamation-triangle'></i></span>
    <span> يرجئ ملأ كل الخانات  </span>"; 
    
    }
    
    else {
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
        {
            echo "<span> <i class='fas fa-exclamation-triangle'></i></span>
            <span> يرجئ ادخال بريد الكتروني صالح  </span>"; 
            $errormail = true;
             
        }
        else {
         $stmt = $conn->prepare('SELECT * FROM ness WHERE Email = ?');
         $stmt->execute([$Email]);
          $postCount = $stmt->rowCount();
            
            if ( $postCount == 1 )
        {          
            echo "<span> <i class='fas fa-exclamation-triangle'></i></span>
            <span> يرجى ادخال بريد الكتروني اخر </span>"; 
            $errormail = true;
            
            }
            
            else 
            {
    
   
        $stmt = $conn->prepare(
        "INSERT INTO ness 
                  (Full_Name   , Email,
                  P_Word       , Phone_Number,
                  Wilaya       , Dayra,
                  Baladiya     , Sgroup,
                  Cm_Time      , Cm_Way)
        VALUES
                   (:Full_Name , :Email,
                    :P_Word    , :Phone_Number,
                    :Wilaya    , :Dayra,
                    :Baladiya  , :Sgroup,
                    :Cm_Time   , :Cm_Way )
                    ");
        
    
$res=$stmt->execute(['Full_Name'=> $Full_Name   , 'Email'=>  $Email ,
                    'P_Word'=>    $P_Word       , 'Phone_Number'=> $Phone_Number,
                    'Wilaya'=>    $Wilaya       , 'Dayra'=>  $Dayra,
                    'Baladiya'=>  $Baladiya     , 'Sgroup'=> $Sgroup,
                    'Cm_Time'=>   $Cm_Time      , 'Cm_Way'=> $Cm_Way]);

   
                  if($res){
                        echo "<span><i class='far fa-check-circle'></i></span>
                        <span>لقد تم إضافة متبرع جديد بنجاح   </span>"; 
                          } 
                            else {     
                            echo      " <span> <i class='fas fa-exclamation-triangle'></i></span>
                            <span>   باينة كش ما صرئ  ههه يرجى اعادة المحاولة لاحقا  </span>"; 
                                 } 
        
    }}
    
    }

  

?>

<script>
var errorempty = "<?php echo $errorempty;?>";
var errormail =  "<?php echo $errormail ;?>" ;
    
     $('#baladiya, #dayra, #wilaya, #wcomm, #hcomm, #bloodgroup').removeClass('walidclass');
 
    
    if(errorempty == true){
    $('#baladiya, #dayra, #wilaya, #wcomm, #hcomm, #bloodgroup').addClass('walidclass');
      
     $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
     $('.messageT').show("slow");
    $('.messageT').delay(1000).hide("fast");
}
    
 if(errormail == true){
     
         $('#Email').addClass('walidclass');
     
         $('.messageT').css({"background-color":"rgba(255,0,0,0.9)", "box-shadow":"0 0 20px rgba(255,0,0,0.9)"}) ;
        $('.messageT').show("slow");
        $('.messageT').delay(1000).hide("fast");
       
     
}
    
    if(errormail == false && errorempty == false){
        $('#FULL_Name , #Phone_Number, #PP_Word, #Email').val('');
         $('.messageT').css({"background-color":"rgba(0,171,102,0.9)", "box-shadow":"0 0 20px rgba(0,171,102,0.9)"}) ;
        $('.form').hide("fast");
        $('.messageT').show("slow");
        $('#popupform').delay(2300).fadeOut('slow');
        $('.messageT').delay(3400).hide("fast");
        $('.form').delay(3500).show("fast");
    }

<?php
    $conn = null; 
exit();
    ?>

</script>


















