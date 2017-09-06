<?php

global $db;

if(isset($_REQUEST['mfo'])){
    
    $sql = "SELECT name FROM BANKS WHERE mfo ='{$_REQUEST['mfo']}'";
    $bank_name = $db->getOne($sql);
  
    if($bank_name){
        
       echo $bank_name;
    
       
    }else{
        
        echo "not_found";
    }
    
}



