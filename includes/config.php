<?php
$protocol = isset($_SERVER['HTTPS'])?'https':'http';
$domain = $_SERVER['HTTP_HOST'];
$script_name = str_replace('/index.php', '',$_SERVER['SCRIPT_NAME']);
if (strlen($script_name) > 2) {
 	$home_url = $protocol.'://'.$domain.''.$script_name;
 } else {
 	$home_url = $protocol.'://'.$domain.'';
 }
