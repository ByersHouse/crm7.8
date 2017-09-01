<?php

class LeadHooks{
    
    
    
    public function sendAlert($bean,$events,$arguments){
        
        
        
        //var_dump($bean->fetched_row);
        //exit;
        $seedAlert = new Alert();
        $seedAlert->name = "Предварительный контакт";
        $seedAlert->description = "Вам назначена задача";
        $seedAlert->assigned_user_id = $bean->fetched_row['assigned_user_id'];
        $seedAlert->is_read = 0 ;
        $seedAlert->target_module = "Leads";
        $seedAlert->url_redirect = "index.php?action=DetailView&module=Leads&record=".$bean->fetched_row['id']."&return_module=Leads&return_action=DetailView";
        $seedAlert->save();
        
        
    }
    
   
    
    
}
