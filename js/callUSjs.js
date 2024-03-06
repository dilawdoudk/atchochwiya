$('#check').on('change', function () {
     if($(this).prop("checked") == true)
         {
             
      $("ul").css("left", "0");
         }
     else{
      $("ul").css("left", "-100%");
     }
     
 }); 


   $('.messageT').hide();

$('#form9').submit(function(event){
  event.preventDefault();
    var name = $('#NameDemd').val();
    var email = $('#DemdEmail').val();
    var phonenmbr = $('#DemdPhone_Number').val();
 
    var Text = $('#TDemd').val();
   
    $('.messageT').load('PHP/CallUSP.php',{
   
Full_Name:name, 
Email:email,
Phone_Number:phonenmbr,
Text:Text
}); 
    
       
});

$('.messageT').hide();