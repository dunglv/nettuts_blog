<?php
$protocol = isset($_SERVER['HTTPS'])?'https':'http';
$domain = $_SERVER['HTTP_HOST'];
$script_name = str_replace('/index.php', '',$_SERVER['SCRIPT_NAME']);
if (strlen($script_name) > 2) {
 	$home_url = $protocol.'://'.$domain.''.$script_name;
 } else {
 	$home_url = $protocol.'://'.$domain.'';
 }


 function convertAlias($str='')
 {
 	$str = mb_strtolower($str);
 	$str = preg_replace('/(\s)+/', '-', $str);
 	$str = preg_replace('/(\-)+/', '-', $str);
 	$str = preg_replace('/ă|â|á|à|ả|ã|ạ|ắ|ẳ|ẵ|ằ|ặ|ấ|ầ|ẩ|ậ/i', 'a', $str);
 	$str = preg_replace('/đ/', 'd', $str);
 	$str = preg_replace('/è|é|ẻ|ẽ|ẹ|ề|ế|ể|ễ|ệ/', 'e', $str);
 	$str = preg_replace('/ì|í|ỉ|ĩ|ị/', 'i', $str);
 	$str = preg_replace('/ò|ó|ỏ|õ|ọ|ô|ồ|ố|ổ|ỗ|ộ|ơ|ờ|ớ|ở|ỡ|ợ/', 'o', $str);
 	$str = preg_replace('/ù|ú|ủ|ũ|ụ|ư|ừ|ứ|ử|ữ|ự/', 'u', $str);
 	$str = preg_replace('/ỳ|ý|ỷ|ỹ|ỵ/', 'y', $str);
 	return $str;
 }
