<?php
$viewdefs ['Leads'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'photo',
            'studio' => 'visible',
            'label' => 'LBL_PHOTO',
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'resident',
            'label' => 'LBL_RESIDENT',
          ),
          1 => 
          array (
            'name' => 'inn',
            'label' => 'LBL_INN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lead_status',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_STATUS',
          ),
          1 => 
          array (
            'name' => 'lead_sex',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SEX',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'education',
            'studio' => 'visible',
            'label' => 'LBL_EDUCATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_birthday',
            'label' => 'LBL_DATE_BIRTHDAY',
          ),
          1 => 
          array (
            'name' => 'soc_status',
            'studio' => 'visible',
            'label' => 'LBL_SOC_STATUS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'placebirth',
            'label' => 'LBL_PLACEBIRTH',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'phone_fax',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
          ),
          1 => 'website',
        ),
        10 => 
        array (
          0 => 'email1',
        ),
        11 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'realty',
            'studio' => 'visible',
            'label' => 'LBL_REALTY',
          ),
          1 => 
          array (
            'name' => 'realtyby',
            'studio' => 'visible',
            'label' => 'LBL_REALTYBY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'realty_vid',
            'studio' => 'visible',
            'label' => 'LBL_REALTYVID',
          ),
          1 => 
          array (
            'name' => 'statliveplace',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_LIVEPLACE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'srok_vladenya_nedvizh',
            'label' => 'LBL_SROK_VLADENIYA',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'family_status',
            'studio' => 'visible',
            'label' => 'LBL_FAMILYSTATUS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'problem_law',
            'studio' => 'visible',
            'label' => 'LBL_PROBLEMLAW',
          ),
          1 => 
          array (
            'name' => 'judded_by_article',
            'label' => 'LBL_JUDDED_BY',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ukrpasport_nom',
            'label' => 'LBL_UKRPASPORT_NOM',
          ),
          1 => 
          array (
            'name' => 'zagrpasport_nom',
            'label' => 'LBL_ZAGPASPORT_NOM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ukrpas_datavidachy',
            'label' => 'LBL_UKRPASP_DATAVIDACHY',
          ),
          1 => 
          array (
            'name' => 'zagrpas_datavidachy',
            'label' => 'LBL_ZAGRPASP_DATAVIDACHY',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'zagrpas_date_end',
            'label' => 'LBL_ZAGRPASP_DATEND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ukrpas_kemvidan',
            'label' => 'LBL_UKRPASP_KEMVIDAN',
          ),
          1 => 
          array (
            'name' => 'zagrpas_kemvidan',
            'label' => 'LBL_ZAGRPASP_KEMVIDAN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pasport_nom_nerezident',
            'label' => 'LBL_PASPORTNOM_NER',
          ),
          1 => 
          array (
            'name' => 'nerezpas_date_vidachi',
            'label' => 'LBL_NEREZPASP_DATEVIDACHI',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'nerezpas_date_end',
            'label' => 'LBL_NEREZPASP_DATEEND',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'vidnazhit_nom',
            'label' => 'LBL_VIDNAZHIT',
          ),
          1 => 
          array (
            'name' => 'vidnazhit_date_vidachi',
            'label' => 'LBL_VIDNAZHIT_DATEVIDACHI',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'vidnazhit_date_end',
            'label' => 'LBL_VIDNAZHIT_DATEEND',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALTERNATE_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 'lead_source',
        ),
        1 => 
        array (
          0 => 'status_description',
          1 => 'lead_source_description',
        ),
        2 => 
        array (
          0 => 'opportunity_amount',
          1 => 'refered_by',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
