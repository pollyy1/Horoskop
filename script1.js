
function saveHoroscope(){
    var formData = new FormData()
    var birthDate= document.getElementById('date1').value;
    if (birthDate!==""){
    formData.set("date", birthDate)  


    $.ajax({
        type: 'POST',
        url: "addHoroscope.php",
        processData: false,
        contentType: false,
        data: formData
       
    })
    .done(function(data){
      
       printHoroscope();   
        $('#saveBtn').prop('disabled', true);
        $('#deleteBtn').prop('disabled', false);
        $('#updateBtn').prop('disabled', false);

    })

}}


   
function printHoroscope(){

    $.ajax({
        type: 'GET',
        url: "viewHoroscope.php",
       
    })
    .done(function(data){
      
        $('#show').html(data);    
    })

}



function deleteHoroscope(){
    $.ajax({
        type: 'DELETE',
        url: "deleteHoroscope.php",
       
    })
    .done(function(data){
      
        printHoroscope();
         $('#saveBtn').prop('disabled', false);
         $('#deleteBtn').prop('disabled', true);
         $('#updateBtn').prop('disabled', true);


    })

}

function updateHoroscope(){
    var birthDate= document.getElementById('date1').value;

    $.ajax({
        type: 'PUT',
        url: "updateHoroscope.php",
       data:{ 
          "birthDate": birthDate 
        }
       
    })
    .done(function(data){
      
        printHoroscope();  
    })

}