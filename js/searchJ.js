$('#check').on('change', function () {
     if($(this).prop("checked") == true)
         {
             
      $("ul").css("left", "0");
         }
     else{
      $("ul").css("left", "-100%");
     }
     
 });



   {    var selecttext = '<option value= -1 selected="selected" >  اختر الولاية </option>';
    $('#wilaya2').html(selecttext);
    $.getJSON('js/walojs.json', function (data) {

         for (i = 0; i < data['wilayas'].length; i++) {
            var j = i + 01;
            selecttext += '<option value="' + i + '">' + j  + '-' + data['wilayas'][i]['name_ar'] + '</option>';

        }
        $('#wilaya2').html(selecttext);
    });    
   }



function walo2() {

    $.getJSON('js/walojs.json', function (data) {

        var selectdayra = '<option value = -1 selected="selected">  اختر الدائرة  </option>';

        var index = $('#wilaya2').val();
if(index > -1)
    {
        var haha = data['wilayas'][index]['dairas'];

        for (i = 0; i < haha.length; i++) {

         var j = i + 01;
            selectdayra += '<option value="' + i + '">'  + haha[i].name_ar + '</option>';

        }
      
        $('#dayra2').html(selectdayra);
 }
        else{
           
            $('#dayra2').html(selectdayra);
        }
    });
}




function walot2() {
    
    

    $.getJSON('js/walojs.json', function (data) {

        var selectbaladiya = '<option value= -1 selected="selected">  اختر البلدية  </option>';

        var index = $('#wilaya2').val();     
       if(index > -1)
    {  
        
        var inde = $('#dayra2').val();
      if(inde > -1){
          
      
        var haha = data['wilayas'][index]['dairas'][inde]['communes'];

        for (i = 0; i < haha.length; i++) {

            var j = i + 01;
            selectbaladiya += '<option value="' + i + '">' + haha[i].name_ar + '</option>';
         
        }
             
           $('#baladiya2').html(selectbaladiya);
        }
        else{
             
            $('#baladiya2').html(selectbaladiya);
        }}
        else{
             
            $('#baladiya2').html(selectbaladiya);
        }
    });
} 


$('#form0').submit(function(event){
    
  event.preventDefault();
    
    var Wila = $('#wilaya2').children("option:selected").html();
var  Day = $('#dayra2').children("option:selected").html();
var Bal=  $('#baladiya2').children("option:selected").html();
    var WilaV = $('#wilaya2').children("option:selected").val();
var  DayV = $('#dayra2').children("option:selected").val();
var BalV=  $('#baladiya2').children("option:selected").val();
var Sg =  $('#bloodgroup2').children("option:selected").val();
    
    $('#drew').load('PHP/search.php',{
Sgroup:Sg,
Wilaya:Wila,  
Dayra :Day,
Baladiya:Bal, 
WilayaV:WilaV, 
DayraV:DayV, 
BaladiyaV:BalV
});    


    
 
    
       
    
    
    
  });
$('.bttnS').hide();
$('.bttnF').hide();
$('.messageT').hide();
$('#content-table').hide();
$('.containerrr').hide();
