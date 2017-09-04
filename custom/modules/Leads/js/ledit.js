



$( document ).ready(function() {

    $("#first_name").change(function() {
        
            var new_name = capitaliseFirstLetter($("#first_name").val());
            $("#first_name").val(new_name);
           
    });
    
    $("#last_name").change(function() {
        
            var new_name = capitaliseFirstLetter($("#last_name").val());
            $("#last_name").val(new_name);
           
    });
   
   $("#first_name2").change(function() {
        
            var new_name = capitaliseFirstLetter($("#first_name2").val());
            $("#first_name2").val(new_name);
           
    });
    
    $("#last_name2").change(function() {
        
            var new_name = capitaliseFirstLetter($("#last_name2").val());
            $("#last_name2").val(new_name);
           
    });
   
   $("#patronymic").change(function() {
        
            var new_name = capitaliseFirstLetter($("#patronymic").val());
            $("#patronymic").val(new_name);
           
    });
   
   
    $("#date_birthday").change(function() {
       
            calculateAge();
    });
   
    $('#age').on('click', function () {
       
            calculateAge();
    });
 
    function strRight(n,str){
        return str.substring(str.length-n,str.length);
    }
    
    function calculateAge(){
        var today = new Date();
        var yr = today.getFullYear();
        var dr_year = strRight(4,$("#date_birthday").val());
        $('#age').val(yr-dr_year);
    }
    
    function capitaliseFirstLetter(string){

        return string.charAt(0).toUpperCase() + string.slice(1);

    }
    
    
    
    
});

