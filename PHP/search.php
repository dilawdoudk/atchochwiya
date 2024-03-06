<?php
 require 'db_conn.php';
  $outpu="";
  $erroremptyW = false;
  $erroremptyG = false;
  $erroremptyS = false;
  $sugestion = 0;
  
             
           $Wilaya = $_POST['Wilaya'] ; $Dayra = $_POST['Dayra'];
           $Baladiya = $_POST['Baladiya'] ; $Sgroup = $_POST['Sgroup'];
           $WilayaV = $_POST['WilayaV'] ; $DayraV = $_POST['DayraV'];
           $BaladiyaV = $_POST['BaladiyaV'];
         
          if (
           $WilayaV == -1 && $BaladiyaV == -1 &&
           $DayraV == -1 && $Sgroup == -1 )
           {
            $erroremptyW = true;
              $erroremptyG = true;                            

           }
         
           else {
         
           if( $WilayaV > -1 && $Sgroup == -1 &&
           $BaladiyaV == -1 && $DayraV == -1 )
           {
         $erroremptyG = true;
              
           }
           else{
         
           if( $WilayaV == -1 && $Sgroup > -1 &&
           $BaladiyaV == -1 && $DayraV == -1 )
           {
               $erroremptyW = true;
               
                        }
         else{
             if($WilayaV > -1 && $Sgroup == -1 &&
           $BaladiyaV > -1 && $DayraV > -1){
                 
                 $erroremptyG = true;
             } else{
                 
                 if($WilayaV > -1 && $Sgroup == -1 &&
           $BaladiyaV == -1 && $DayraV > -1){
                     
                      $erroremptyG = true;
                 }
                 else{
                     
                 
             
                  
          if( $WilayaV > -1 && $Sgroup > -1 &&
          $BaladiyaV == -1 && $DayraV == -1 )
          {



          $stmt = $conn->prepare(
          "SELECT *
          
          FROM ness 

          WHERE
          ( Wilaya =:Wilaya &&
          Sgroup = :Sgroup) ORDER BY RAND() LIMIT  135
          ");



           $stmt->execute ([ 'Wilaya' => $Wilaya ,
          'Sgroup' => $Sgroup ]);
           $postCount = $stmt->rowCount();
              
          if( $postCount > 0){

          while($row = $stmt -> fetch() ) {
          $outpu .= "<tr>
              <td>" . $row->Full_Name ."</td>
              <td>" . $row->Dayra . "</td>
              <td>" .$row->Baladiya . "</td>
              <td>". "0". $row->Phone_Number . "</td>
              <td>" .$row->Cm_Way ."</td>
              <td>" .$row->Cm_Time . "</td>
          </tr>" ; }
          echo $outpu; }
               else {
                   $erroremptyS = true;
                   $sugestion = 3;
                              }
          }   
             
             else{
             
             if( $WilayaV > -1 && $Sgroup > -1 &&
             $BaladiyaV == -1 && $DayraV > -1 )
             {
             $stmt = $conn->prepare(
             "SELECT *

             FROM ness

             WHERE
             ( Wilaya =:Wilaya &&
             Dayra = :Dayra &&
             Sgroup = :Sgroup )  ORDER BY RAND() LIMIT  135
             ");



              $stmt->execute ([
             'Wilaya' => $Wilaya ,
             'Dayra' => $Dayra ,
             'Sgroup' => $Sgroup ]);
                 $postCount = $stmt->rowCount();


             if($postCount > 0){

             while($row = $stmt -> fetch() ) {
             $outpu .= "<tr>
                 <td>" . $row->Full_Name ."</td>
                 <td>" . $row->Dayra . "</td>
                 <td>" .$row->Baladiya . "</td>
                 <td>". "0" . $row->Phone_Number . "</td>
                 <td>" .$row->Cm_Way ."</td>
                 <td>" .$row->Cm_Time . "</td>
             </tr>" ; }
             echo $outpu;

    
             }
                 
                     else {
                         
                         $erroremptyS = true;
                         $sugestion = 2;
                            }


             }   
         else{
             if( $WilayaV > -1 && $Sgroup > -1 &&
             $BaladiyaV > -1 && $DayraV > -1 )
             {


            

             $stmt = $conn->prepare(
             "SELECT *

             FROM ness

             WHERE
             ( Wilaya =:Wilaya &&
             Dayra = :Dayra &&
             Baladiya = :Baladiya &&
             Sgroup = :Sgroup )  ORDER BY RAND() LIMIT  135
             ");


              $stmt->execute ([
                'Wilaya' => $Wilaya ,
             'Dayra' => $Dayra ,
             'Baladiya' => $Baladiya ,
             'Sgroup' => $Sgroup ]);
                 
                 $postCount = $stmt->rowCount();


             if($postCount > 0 ){

             while($row = $stmt -> fetch() ) {
             $outpu .= "<tr>
                 <td>" . $row->Full_Name ."</td>
                 <td>" . $row->Dayra . "</td>
                 <td>" .$row->Baladiya . "</td>
                 <td>" . "0". $row->Phone_Number . "</td>
                 <td>" .$row->Cm_Way ."</td>
                 <td>" .$row->Cm_Time . "</td>
             </tr>" ; }
             echo $outpu;
             }


                       else { $erroremptyS = true;
                             $sugestion = 1;

                                     }
            
             }
             }
             }}}}}}
             ?>
             
             <script>
var erroremptyW = "<?php echo $erroremptyW;?>";
var erroremptyG = "<?php echo $erroremptyG;?>";
var erroremptyS = "<?php echo $erroremptyS;?>";
var errorsugestion ="<?php echo $sugestion;?>"                 

 $(' #wilaya2 , #bloodgroup2').removeClass('walidclass');
   
    if(erroremptyW == true && erroremptyG == false) {
        $('#content-table').hide();
   $('#wilaya2').addClass('walidclass');
         $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
        var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span>  اختر الولاية من فضلك </span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(2500).hide("fast");
        
}
    
 if(erroremptyG == true && erroremptyW == false){
     $('#content-table').hide();
     $('#bloodgroup2').addClass('walidclass');
      $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
       var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span>  اختر فصيلة الدم من فضلك</span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(2500).hide("fast");
            
} 
    if(erroremptyW == true && erroremptyG == true){
        $('#content-table').hide();
       $(' #wilaya2 , #bloodgroup2').addClass('walidclass'); $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
         var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span>  اختر الولاية و فصيلة الدم على الاقل من فضلك</span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(3500).hide("fast"); 
       }
    
                 
    if(erroremptyS == true){
        if(errorsugestion == 1){
            $('#content-table').hide();
        $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
         var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span> مع الاسف لا يوجد متبرع مناسب مسجل بهذه البلدية يمكنك البحث في باقي البلديات باختيار الدائرة و الولاية فقط  </span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(4000).hide("fast"); 
        $('#baladiya2').children("option:selected").before('<option value= -1 selected="selected"> اختر البلدية </option>');
            
        }
        if(errorsugestion == 2){
            $('#content-table').hide();
        $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
         var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span>  مع الاسف لا يوجد متبرع مناسب مسجل بهذه الدائرة يمكنك البحث في باقي الدوائر باختيار الولاية فقط</span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(4000).hide("fast");
            $('#dayra2').children("option:selected").before('<option value= -1 selected="selected"> اختر الدائرة </option>');
        
        }
        if(errorsugestion == 3){
            $('#content-table').hide();
        $('.messageT').css({"background-color" : "rgba(255,0,0,0.9)", "box-shadow" : "0 0 20px rgba(255,0,0,0.9)"});
         var walo = "<span> <i class='fas fa-exclamation-triangle'></i></span> <span>  مع الاسف لا يوجد متبرع مناسب مسجل في هذه الولاية حاليا ان كان الامر مستعجل اتصل بنا سنحاول ايحاد متبرع  </span>";
         $('.messageT').html(walo);
         $('.messageT').show("slow");
    $('.messageT').delay(8000).hide("fast");  
        }
       }
                 
    if(erroremptyW == false && erroremptyG == false &&  erroremptyS == false ){
    $('#content-table').show();
         var w = $('#content-table  tr:gt(0)').length;
       console.log(w);
        
       
     if(w > 5){
            
        $('.containerrr').show();
             var pages = w / 5 ;
        pages = Math.ceil(pages) ;
       
          var j = pages * 5 ; 
            
            
            for(i=5 ;i<j ;i=i+5){ 
       $('#content-table  tr:gt('+i+')').hide();}
        
    
            $(".pagina-wrapper").html(' ');
            

        for (x=1 ; x<=pages; x++) 
    {
    
    $(".pagina-wrapper").append(' <button id ="'+x+'" class="bttn"> '+x+' </button>');
    
    $('#'+x+'').on('click', function () {
       for(i=0 ;i<j ;i=i+5){
    $('#content-table  tr:gt('+i+')').hide();
   }
       var S = $(this).html();
        S= S*5;
       for(i=(S-5) ;i<S ;i=i+5){
    $('#content-table  tr:gt('+i+')').show();
   } 
    for(i=S ;i<j ;i=i+5){
    $('#content-table  tr:gt('+i+')').hide();
   }   
});  
      
}
            
           if(pages > 7)
                {
                    for (i=8; i<=pages;i++)
                              {
                                  $('#'+i+'').hide();
                              }
                     for (i=1; i<8;i++)
                              {
                                  $('#'+i+'').show();
                              }
                    
                    
                    $('.bttnF').show();
                    
                    var f =1 ; 
                    var K;
                    var I =  Math.ceil(pages/7);
                      $('.bttnF').on('click', function () {
                          
                         $('.bttnS').show();
                          for (i=1; i<8;i++)
                              {
                                  K = i;
                                  
                                   if (f >= I)
                                   {f=0;
                                               for (i=8; i<=pages;i++)
                              {
                                  $('#'+i+'').hide();
                              }
                        
                          for (i=1; i<8;i++)
                              { 
                                  $('#'+i+'').show();  
                              }  
                                     $('.bttnS').hide();
                                   }
                              
                                  else{
                                      
                                  for(h=1 ; h<f ;h++)
                                  {
                                  K = i+7; 
                                  }
                                  $('#'+K+'').hide();
                                  $('#'+(K+7)+'').show();
                                      
                                   }   
                              }
                          f++;
                         if (f > I){ $('.bttnS').hide();}
                          
                      });
                    
                    $('.bttnS').on('click', function () {
                         
                        for (i=8; i<=pages; i++)
                              {
                                  $('#'+i+'').hide();
                              }
                        
                          for (i=1; i<8; i++)
                              { 
                                  $('#'+i+'').show();  
                              }
                          
                        
                          $('.bttnS').hide();
                          
                      });  
                    
                    
                }
        }
    
    
 }
    
                 


</script>
             
            
