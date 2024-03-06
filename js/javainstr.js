/*eslint-env browser*/
    $('#popupform').hide();
    $('#popupDemd').hide();

 $('#check').on('change', function () {
     if($(this).prop("checked") === true)
         {
             
      $("ul").css("left", "0");
         }
     else{
      $("ul").css("left", "-100%");
     }
     
 });



   $('#button11').on('click', function () {
        
      $('#popupform').show();
    
         
       var selecttext = '  <option value= -1 selected="selected" >  اختر الولاية </option>';
    $('#wilaya').html(selecttext);
        
        
    $.getJSON('js/walojs.json', function (data) {

        for (i = 0; i < data['wilayas'].length; i++) {
            var j = i + 01;
            selecttext += '<option value="' + i + '">' + j  + '-' + data['wilayas'][i]['name_ar'] + '</option>';

        }
        $('#wilaya').html(selecttext);
    });
         
    });
         
    $('#button1').on('click', function () {
        
        $('#popupform').show();
    
         
       var selecttext = ' <option value= -1 selected="selected" >  اختر الولاية </option>';
    $('#wilaya').html(selecttext);
        
        
    $.getJSON('js/walojs.json', function (data) {

        for (i = 0; i < data['wilayas'].length; i++) {
            var j = i + 01;
            selecttext += '<option value="' + i + '">' + j  + '-' + data['wilayas'][i]['name_ar'] + '</option>';

        }
       
        $('#wilaya').html(selecttext);
    });
         
    });
 
     $('#button22').on('click', function () {
        
      $('#popupDemd').show();});

      $('#button2').on('click', function () {
        
      $('#popupDemd').show();});







    $('#close').on('click', function () {
        $('#popupform').hide();
    });
 $('#close2').on('click', function () {
        $('#popupDemd').hide();
    });


    

function walo() {

    $.getJSON('js/walojs.json', function (data) {

        var selectdayra = ' <option value= -1 selected="selected">  اختر الدائرة  </option>';

        var index = $('#wilaya').val();
        
if(index > -1)
    {
        var haha = data['wilayas'][index]['dairas'];

        for (i = 0; i < haha.length; i++) {
            
          var j = i + 01;
            selectdayra += '<option value="' + i + '">' + haha[i].name_ar + '</option>';

        }
         
        $('#dayra').html(selectdayra);
    }
        else{
           
            $('#dayra').html(selectdayra);
        }
    });
}


    
function walot() {
    
    

    $.getJSON('js/walojs.json', function (data) {

        var selectbaladiya = '<option value= -1 selected="selected">  اختر البلدية  </option>';

        var index = $('#wilaya').val();     
     if(index > -1)
    {  
        
        var inde = $('#dayra').val();
if(inde > -1){
        var haha = data['wilayas'][index]['dairas'][inde]['communes'];

        for (i = 0; i < haha.length; i++) {
         var j = i + 01;
            selectbaladiya += '<option value="' + i + '">' + haha[i].name_ar + '</option>';
         
        }
        
           $('#baladiya').html(selectbaladiya);
        }
        else{
            
            $('#baladiya2').html(selectbaladiya);
        }}
        else{
        
            $('#baladiya').html(selectbaladiya);
        }
    });
} 

     







    
    
$('#form1').submit(function(event){
  event.preventDefault();
    var name = $('.inname').val();
    var email = $('.inemail').val();
    var P_Word = $('.inepass').val();
    var phonenmbr = $('.inphonenmbr').val();
    var bloodgroup = $('#bloodgroup').children("option:selected").val();
    var hcomm = $('#hcomm option:selected').val();
    var wcomm = $('#wcomm option:selected').val();
    var wilaya = $('#wilaya').children("option:selected").html();
    var dayra = $('#dayra').children("option:selected").html();
    var baladiya = $('#baladiya').children("option:selected").html();
    var wilayaV = $('#wilaya').children("option:selected").val(); 
    var dayraV = $('#dayra').children("option:selected").val();
    var baladiyaV = $('#baladiya').children("option:selected").val();
    
   
    
    $('.messageT').load('PHP/insert.php',{
   
Full_Name:name, 
Email:email,
P_Word:P_Word,
Phone_Number:phonenmbr,
Sgroup:bloodgroup,
Cm_Way:hcomm,
Cm_Time:wcomm,
Wilaya:wilaya,  
Dayra :dayra,
Baladiya:baladiya, 
WilayaV:wilayaV, 
DayraV:dayraV, 
BaladiyaV:baladiyaV
}); 
       
});


$('#form4').submit(function(event){
  event.preventDefault();
    var name = $('#NameDemd').val();
    var email = $('#DemdEmail').val();
    var phonenmbr = $('#DemdPhone_Number').val();
    var bloodgroup = $('#Demdbloodgroup').children("option:selected").val();
    var Text = $('#TDemd').val();
   
    $('.messageT').load('PHP/insertDemd.php',{
   
Full_Name:name, 
Email:email,
Phone_Number:phonenmbr,
Sgroup:bloodgroup,
Text:Text
}); 
    
       
});

$('.messageT').hide();






 





 
