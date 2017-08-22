<?php

$dictionary['Lead']['fields']['lead_status'] = array (
      'required' => false,
      'name' => 'lead_status',
      'vname' => 'LBL_LEAD_STATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_status_list',
      'studio' => 'visible',
      'dependency' => false,
    );

$dictionary['Lead']['fields']['lead_sex'] = array (
      'required' => false,
      'name' => 'lead_sex',
      'vname' => 'LBL_LEAD_SEX',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_sex_list',
      'studio' => 'visible',
      'dependency' => false,
    );

$dictionary['Lead']['fields']['resident'] = array (
      'required' => false,
      'name' => 'resident',
      'vname' => 'LBL_RESIDENT',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );

$dictionary['Lead']['fields']['inn']=array (
      'required' => false,
      'name' => 'inn',
      'vname' => 'LBL_INN',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => 'индивидаульный налоговый номер',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '15',
      'size' => '20',
    );

$dictionary['Lead']['fields']['date_birthday'] = array (
      'required' => false,
      'name' => 'date_birthday',
      'vname' => 'LBL_DATE_BIRTHDAY',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    );

$dictionary['Lead']['fields']['soc_status'] = array (
      'required' => false,
      'name' => 'soc_status',
      'vname' => 'LBL_SOC_STATUS',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'options' => 'lead_socstatus_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
    );


$dictionary['Lead']['fields']['statliveplace'] = array (
      'required' => false,
      'name' => 'statliveplace',
      'vname' => 'LBL_STATUS_LIVEPLACE',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'options' => 'lead_statliveplace_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
    );

$dictionary['Lead']['fields']['education'] = array (
      'required' => false,
      'name' => 'education',
      'vname' => 'LBL_EDUCATION',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_education_list',
      'studio' => 'visible',
      'dependency' => false,
);

$dictionary['Lead']['fields']['photo'] = array (
      'required' => false,
      'name' => 'photo',
      'vname' => 'LBL_PHOTO',
      'type' => 'image',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Выберите фотографию',
      'help' => 'Выберите фотографию',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 255,
      'size' => '20',
      'studio' => 'visible',
      'dbType' => 'varchar',
      'border' => '1',
      'width' => '120',
      'height' => '240',
    );


$dictionary['Lead']['fields']['ukrpasport_nom'] = array (
      'required' => false,
      'name' => 'ukrpasport_nom',
      'vname' => 'LBL_UKRPASPORT_NOM',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Серия Номер паспорта Украины',
      'help' => 'Серия Номер паспорта Украины',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
);


$dictionary['Lead']['fields']['ukrpas_kemvidan'] = array (
      'required' => false,
      'name' => 'ukrpas_kemvidan',
      'vname' => 'LBL_UKRPASP_KEMVIDAN',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Украинский паспорт кем выдан',
      'help' => 'Украинский паспорт кем выдан',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );

$dictionary['Lead']['fields']['ukrpas_datavidachy'] = array (
      'required' => false,
      'name' => 'ukrpas_datavidachy',
      'vname' => 'LBL_UKRPASP_DATAVIDACHY',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Украинский паспорт дата выдачи',
      'help' => 'Украинский паспорт дата выдачи',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    );


$dictionary['Lead']['fields']['placebirth']=array (
      'required' => false,
      'name' => 'placebirth',
      'vname' => 'LBL_PLACEBIRTH',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => 'Место рождения',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '30',
      'size' => '20',
    );


$dictionary['Lead']['fields']['zagrpasport_nom'] = array (
      'required' => false,
      'name' => 'zagrpasport_nom',
      'vname' => 'LBL_ZAGPASPORT_NOM',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Серия Номер загран паспорта Украины',
      'help' => 'Серия Номер загран паспорта Украины',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
);

$dictionary['Lead']['fields']['zagrpas_kemvidan'] = array (
      'required' => false,
      'name' => 'zagrpas_kemvidan',
      'vname' => 'LBL_ZAGRPASP_KEMVIDAN',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => ' Заграничный Украинский паспорт кем выдан',
      'help' => 'Заграничный Украинский паспорт кем выдан',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );

$dictionary['Lead']['fields']['zagrpas_datavidachy'] = array (
      'required' => false,
      'name' => 'zagrpas_datavidachy',
      'vname' => 'LBL_ZAGRPASP_DATAVIDACHY',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Загран паспорт дата выдачи',
      'help' => 'Загран паспорт дата выдачи',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    );

$dictionary['Lead']['fields']['zagrpas_date_end'] = array (
      'required' => false,
      'name' => 'zagrpas_date_end',
      'vname' => 'LBL_ZAGRPASP_DATEND',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Загран паспорт дата окончания',
      'help' => 'Загран паспорт дата окончания',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    );





$dictionary['Lead']['fields']['pasport_nom_nerezident'] = array (
      'required' => false,
      'name' => 'pasport_nom_nerezident',
      'vname' => 'LBL_PASPORTNOM_NER',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Серия Номер паспорта Нерезидента Украины',
      'help' => 'Серия Номер загран паспорта Нерезидента Украины',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
);


$dictionary['Lead']['fields']['nerezpas_date_vidachi'] = array (
      'required' => false,
      'name' => 'nerezpas_date_vidachi',
      'vname' => 'LBL_NEREZPASP_DATEVIDACHI',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Паспорт Нерезидента Украины дата выдачи',
      'help' => 'Паспорт Нерезидента Украины дата выдачи',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    );

$dictionary['Lead']['fields']['nerezpas_date_end'] = array (
      'required' => false,
      'name' => 'nerezpas_date_end',
      'vname' => 'LBL_NEREZPASP_DATEEND',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Паспорт Нерезидента Украины дата окончания',
      'help' => 'Паспорт Нерезидента Украины дата окончания',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
);

$dictionary['Lead']['fields']['vidnazhit_nom'] = array (
      'required' => false,
      'name' => 'vidnazhit_nom',
      'vname' => 'LBL_VIDNAZHIT',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Серия Номер вида на жительство Нерезидента Украины',
      'help' => 'Серия Номер вида на жительство Нерезидента Украины',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
);


$dictionary['Lead']['fields']['vidnazhit_date_vidachi'] = array (
      'required' => false,
      'name' => 'vidnazhit_date_vidachi',
      'vname' => 'LBL_VIDNAZHIT_DATEVIDACHI',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Вид на жительство дата выдачи',
      'help' => 'Вид на жительство дата выдачи',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
);

$dictionary['Lead']['fields']['vidnazhit_date_end'] = array (
      'required' => false,
      'name' => 'vidnazhit_date_end',
      'vname' => 'LBL_VIDNAZHIT_DATEEND',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Вид на жительство дозволенный срок проживания',
      'help' => 'Вид на жительство дозволенный срок проживания',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
);



$dictionary['Lead']['fields']['problem_law'] = array (
      'required' => false,
      'name' => 'problem_law',
      'vname' => 'LBL_PROBLEMLAW',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'options' => 'lead_problemlaw_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
);

$dictionary['Lead']['fields']['judded_by_article'] = array (
      'required' => false,
      'name' => 'judded_by_article',
      'vname' => 'LBL_JUDDED_BY',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Судимость по статье',
      'help' => 'Судимость по статье',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );


$dictionary['Lead']['fields']['family_status'] = array (
      'required' => false,
      'name' => 'family_status',
      'vname' => 'LBL_FAMILYSTATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_familystatus_list',
      'studio' => 'visible',
      'dependency' => false,
);


$dictionary['Lead']['fields']['realty'] = array (
      'required' => false,
      'name' => 'realty',
      'vname' => 'LBL_REALTY',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'options' => 'lead_realty_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
);

$dictionary['Lead']['fields']['realtyby'] = array (
      'required' => false,
      'name' => 'realtyby',
      'vname' => 'LBL_REALTYBY',
      'type' => 'multienum',
      'massupdate' => 0,
      'default' => '^^',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'options' => 'lead_realtyby_list',
      'studio' => 'visible',
      'isMultiSelect' => true,
);


$dictionary['Lead']['fields']['realty_vid'] = array (
      'required' => false,
      'name' => 'realty_vid',
      'vname' => 'LBL_REALTYVID',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_realtyvid_list',
      'studio' => 'visible',
      'dependency' => false,
);

$dictionary['Lead']['fields']['srok_vladenya_nedvizh'] = array (
      'required' => false,
      'name' => 'srok_vladenya_nedvizh',
      'vname' => 'LBL_SROK_VLADENIYA',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => ' Срок владения недвижимым имуществом',
      'help' => 'Срок владения недвижимым имуществом',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );




$dictionary['Lead']['fields']['transport_owner1'] = array (
      'required' => false,
      'name' => 'transport_owner1',
      'vname' => 'LBL_TRANSOWNER1',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_transowner_list',
      'studio' => 'visible',
      'dependency' => false,
);

$dictionary['Lead']['fields']['transport_owner2'] = array (
      'required' => false,
      'name' => 'transport_owner2',
      'vname' => 'LBL_TRANSOWNER2',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_transowner_list',
      'studio' => 'visible',
      'dependency' => false,
);




$dictionary['Lead']['fields']['how_buytransport1'] = array (
      'required' => false,
      'name' => 'how_buytransport1',
      'vname' => 'LBL_HOWBUYTRANS1',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_buymode_list',
      'studio' => 'visible',
      'dependency' => false,
);


$dictionary['Lead']['fields']['how_buytransport2'] = array (
      'required' => false,
      'name' => 'how_buytransport2',
      'vname' => 'LBL_HOWBUYTRANS2',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'lead_buymode_list',
      'studio' => 'visible',
      'dependency' => false,
);





$dictionary['Lead']['fields']['yearissuetrans1'] = array (
      'required' => false,
      'name' => 'yearissuetrans1',
      'vname' => 'LBL_YEARISSUETR1',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Год выпуска транспорта 1',
      'help' => 'Год выпуска транспорта 1',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '4',
      'size' => '20',
    );




$dictionary['Lead']['fields']['yearissuetrans2'] = array (
      'required' => false,
      'name' => 'yearissuetrans2',
      'vname' => 'LBL_YEARISSUETR2',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Год выпуска транспорта 1',
      'help' => 'Год выпуска транспорта 1',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '4',
      'size' => '20',
    );

$dictionary['Lead']['fields']['trans1_manufacturer'] = array (
      'required' => false,
      'name' => 'trans1_manufacturer',
      'vname' => 'LBL_TRANS1MANUFACT',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 50,
      'size' => '20',
      'options' => 'lead_manufacturer_list',
      'studio' => 'visible',
      'dependency' => false,
);

$dictionary['Lead']['fields']['trans2_manufacturer'] = array (
      'required' => false,
      'name' => 'trans2_manufacturer',
      'vname' => 'LBL_TRANS2MANUFACT',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 50,
      'size' => '20',
      'options' => 'lead_manufacturer_list',
      'studio' => 'visible',
      'dependency' => false,
);



$dictionary['Lead']['fields']['model_trans1'] = array (
      'required' => false,
      'name' => 'model_trans1',
      'vname' => 'LBL_MODEL_TRANS1',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Модель транспорта 1',
      'help' => 'Модель транспорта 1',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '50',
      'size' => '20',
    );

$dictionary['Lead']['fields']['model_trans2'] = array (
      'required' => false,
      'name' => 'model_trans2',
      'vname' => 'LBL_MODEL_TRANS2',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Модель транспорта 2',
      'help' => 'Модель транспорта 2',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '50',
      'size' => '20',
    );