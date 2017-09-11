<?php
/***CONFIGURATOR***/
$sugar_config['disable_persistent_connections'] = false;
$sugar_config['dbconfigoption']['collation'] = 'utf8_general_ci';
$sugar_config['default_language'] = 'ru_RU';
$sugar_config['asterisk_host'] = '127.0.0.1';
$sugar_config['asterisk_port'] = '5038';
$sugar_config['asterisk_user'] = 'ami_user';
$sugar_config['asterisk_secret'] = 'ami_pass';
$sugar_config['asterisk_soapuser'] = 'admin';
$sugar_config['asterisk_soappass'] = 'admin';
$sugar_config['asterisk_context'] = 'from-internal';
$sugar_config['asterisk_expr'] = '^(sip\\/[1-9][0-9][0-9]?[0-9]?-|Local)';
$sugar_config['asterisk_dialout_channel'] = 'SIP/###';
$sugar_config['asterisk_dialin_ext_match'] = 'Local\\/(?:.*?)(\\d{2,10})#?@';
$sugar_config['asterisk_rg_detect_expr'] = '^Local\\/RG';
$sugar_config['asterisk_rg_cell_ring_expr'] = '^Local\\/\\d{7,10}';
$sugar_config['asterisk_digits_to_match'] = '8';
$sugar_config['asterisk_call_subject_inbound_abbr'] = 'IBC: ';
$sugar_config['asterisk_call_subject_outbound_abbr'] = 'OBC: ';
$sugar_config['asterisk_call_subject_max_length'] = '50';
$sugar_config['asterisk_listener_poll_rate'] = '5000';
$sugar_config['asterisk_short_call_status'] = 'Held';
$sugar_config['asterisk_hide_call_popups_after_mins'] = '60';
$sugar_config['asterisk_jquery_override'] = '0';
$sugar_config['asterisk_max_popups'] = '5';
$sugar_config['asterisk_logger_sql_mode'] = '0';
$sugar_config['asterisk_block_button_enabled'] = '0';
$sugar_config['asterisk_transfer_button_enabled'] = '1';
$sugar_config['asterisk_relate_to_account_enabled'] = '0';
$sugar_config['asterisk_relate_to_contact_enabled'] = '1';
$sugar_config['asterisk_create_new_contact_enabled'] = '1';
$sugar_config['asterisk_contact_phone_fields'] = 'phone_work,phone_home,phone_mobile,phone_other,assistant_phone';
$sugar_config['asterisk_account_phone_fields'] = 'phone_office,phone_alternate';
$sugar_config['asterisk_callinize_dev'] = '0';
$sugar_config['asterisk_callinize_debug'] = '0';
$sugar_config['default_module_favicon'] = false;
$sugar_config['dashlet_auto_refresh_min'] = '30';
$sugar_config['stack_trace_errors'] = false;
$sugar_config['developerMode'] = false;
$sugar_config['passwordsetting']['SystemGeneratedPasswordON'] = '0';
$sugar_config['SAML_loginurl'] = '';
$sugar_config['SAML_X509Cert'] = '';
$sugar_config['authenticationClass'] = '';
$sugar_config['addAjaxBannedModules'][1] = 'Home';
/***CONFIGURATOR***/
$sugar_config['http_referer']['list'][] = 'st79.int';
$sugar_config['http_referer']['actions'] =array( 'index', 'ListView', 'DetailView', 'EditView', 'oauth', 'authorize', 'Authenticate', 'Login', 'SupportPortal', 'Upgrade' ); 