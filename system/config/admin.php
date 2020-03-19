<?php
$_['site_url']          = HTTP_SERVER;
$_['template_directory'] = APP . 'design';
// Actions
$_['action_pre_action'] = array(
    'startup/route',
);

// Actions
$_['action_default']    = 'main/dashboard';