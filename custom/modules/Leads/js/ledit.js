



$( document ).ready(function() {
    /*
    $("#date_birthday").input(function() {
        alert( "wow" );
    
    });
    */
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
    
    
    
    
    
});

