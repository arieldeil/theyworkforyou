<?php

$new_style_template = TRUE;

include_once '../../../includes/easyparliament/init.php';
include_once INCLUDESPATH . 'easyparliament/member.php';

$alert = new MySociety\TheyWorkForYou\AlertView($THEUSER);
$data = $alert->display();

MySociety\TheyWorkForYou\Renderer::output('alert/update-mp', $data);

