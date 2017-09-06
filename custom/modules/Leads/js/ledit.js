

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
 
 
    $("#bank_mfo").change(function() {
        
        $("#bank_name").val("Идет поиск.....");
        var url ="index.php?module=Leads&action=banksAction&to_pdf=1";
        var data = {};
        data.mfo = $("#bank_mfo").val();
     
        var jqxhr = $.post(url,data)
            .success(function(res){ 
                var pos = res.indexOf('<');
                var bank_name = res.substring(0,pos);
                
                if(bank_name!='not_found'){
                    $("#bank_name").val(bank_name);
                }else{
                    alert("Банк с МФО "+$("#bank_mfo").val()+" не найден в системе ");
                    $("#bank_name").val();
                }

            })
            .error(function() { /*alert("Ошибка выполнения");*/ })
            .complete(function() {  });  
    });
    
    
    $("#bank_emitent_mfo").change(function() {
        
        $("#bank_emitent_name").val("Идет поиск.....");
        var url ="index.php?module=Leads&action=banksAction&to_pdf=1";
        var data = {};
        data.mfo = $("#bank_emitent_mfo").val();
     
        var jqxhr = $.post(url,data)
            .success(function(res){ 
                var pos = res.indexOf('<');
                var bank_name = res.substring(0,pos);
                if(bank_name!='not_found'){
                    $("#bank_emitent_name").val(bank_name);
                }else{
                    alert("Банк с МФО "+$("#bank_emitent_mfo").val()+" не найден в системе ");
                    $("#bank_emitent_name").val();
                }

            })
            .error(function() { /*alert("Ошибка выполнения");*/ })
            .complete(function() {  });  
    });
 
    $('#account_num').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
 
 
 
 
    function strRight(n,str){
        return str.substring(str.length-n,str.length);
    }
    
    function calculateAge(){
        var today = new Date();
        var yr = today.getFullYear();
        var dr_year = strRight(4,$("#date_birthday").val());
        if(dr_year!=0){
            $('#age').val(yr-dr_year);
        }else{
            alert("Введите дату рождения для автоматического расчета возраста");
        }   
    }
    
    function capitaliseFirstLetter(string){

        return string.charAt(0).toUpperCase() + string.slice(1);

    }
    
    
    
    
});

