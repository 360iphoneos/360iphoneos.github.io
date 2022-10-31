<?php

$urls = array(
    'https://www.weday.date',
    'https://www.weday.date/index.html',
	'https://www.weday.date/index.htm',
	'https://www.weday.date/360os/360os/',
	'https://www.weday.date/360os/360n7lite/360n7lite.html',
	'https://www.weday.date/360os/360n7/360n7.html',
	'https://www.weday.date/360os/360n7pro/360n7pro.html',
	'https://www.weday.date/360os/360n6lite/360n6lite.html',
	'https://www.weday.date/360os/360n6/360n6.html',
	'https://www.weday.date/360os/360n6pro/360n6pro.html',
	'https://www.weday.date/360os/360n5/360n5.html',
	'https://www.weday.date/360os/360n5s/360n5s.html',
	'https://www.weday.date/360os/360n4sQualcomm/360n4sQualcomm.html',
	'https://www.weday.date/360os/360vizza/360vizza.html',
	'https://www.weday.date/360os/360q5/360q5.html',
	'https://www.weday.date/360os/360q5plus/360q5plus',
);
$api = 'http://data.zz.baidu.com/urls?site=https://www.weday.date&token=GL6Maa5f0LscHVrr';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
						

?>