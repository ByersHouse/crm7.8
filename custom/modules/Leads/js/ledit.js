



$( document ).ready(function() {
    /*
    $("#date_birthday").input(function() {
        alert( "wow" );
    
    });
    */
   
    $('#age').on('click', function () {
       //alert( "wow" );
        var today = new Date();
        var yr = today.getFullYear();
        var dr_year = strRight(4,$("#date_birthday").val());
        $('#age').val(yr-dr_year);
    });
 
    function strRight(n,str){
        return str.substring(str.length-n,str.length);
    }
    
    
    
    
    
    
});

