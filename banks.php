<?php



require_once 'config.php';

$link = mysql_connect($_SERVER["SERVER_ADDR"], $sugar_config["dbconfig"]["db_user_name"], $sugar_config["dbconfig"]["db_password"]);

if (!$link) {
    
    die('Ошибка соединения: ' . mysql_error());
    
}else{
    
   
    mysql_select_db($sugar_config["dbconfig"]["db_name"], $link);
    
    $sql = "SELECT name FROM BANKS WHERE mfo ='{$_REQUEST['mfo']}'";
    
    $sqlres = mysql_query($sql,$link);
    $row = mysql_fetch_row($sqlres);
    if($row){
        echo $row[0];
    }else{
        echo "not_found";
    }
    
}



mysql_close($link);