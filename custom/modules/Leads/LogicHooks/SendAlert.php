<?php

class LeadHooks{
    
    
    
    public function sendAlert($bean,$events,$arguments){
        
        
        
       //var_dump($bean->fetched_row['message_to_assigned']);
       // exit;
        /*вариант 2 
         * $alert = BeanFactory::newBean('Alerts');
            $alert->name = 'My Alert';
        */
        $seedAlert = new Alert();
        $seedAlert->name = "Предварительный контакт '".$bean->fetched_row['first_name']." ".$bean->fetched_row['last_name']."'";
        $seedAlert->description = "Вам назначена задача";
        $seedAlert->assigned_user_id = $bean->fetched_row['assigned_user_id'];
        $seedAlert->message_to_assigned = $bean->fetched_row['message_to_assigned'];
        $seedAlert->is_read = 0 ;
        $seedAlert->type = "info" ;
        $seedAlert->target_module = "Lead";
        $seedAlert->url_redirect = "index.php?action=DetailView&module=Leads&record=".$bean->fetched_row['id']."&return_module=Leads&return_action=DetailView";
        $seedAlert->save();
        
        
    }
    
   
    
    
}
