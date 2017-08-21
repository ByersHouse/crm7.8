<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 'last_name',
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
          1 => '',
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
            'name' => 'statliveplace',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_LIVEPLACE',
          ),
          1 => 
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
          0 => 'phone_mobile',
        ),
        9 => 
        array (
          0 => 'phone_fax',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'type' => 'varchar',
            'validateDependency' => false,
            'customCode' => '<input name="account_name" id="EditView_account_name" {if ($fields.converted.value == 1)}disabled="true"{/if} size="30" maxlength="255" type="text" value="{$fields.account_name.value}">',
          ),
          1 => 'website',
        ),
        11 => 
        array (
          0 => 'email1',
        ),
        12 => 
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
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
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
          0 => 
          array (
            'name' => 'status_description',
          ),
          1 => 
          array (
            'name' => 'lead_source_description',
          ),
        ),
        2 => 
        array (
          0 => 'opportunity_amount',
          1 => 'refered_by',
        ),
        3 => 
        array (
          0 => 'campaign_name',
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
