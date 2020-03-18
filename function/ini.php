<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

//include_once(KCC_ROOT.'function/ni.php');

function gethtml($url,$ua,$timeout,$isgziphtmlfile){
$header = array("User-Agent:".$ua."");
$isgziphtml =getwebpages($url, $header, $timeout);
if (isgziphtmlapi($isgziphtmlfile,$isgziphtml) == '1') {
$html=gzdecodeapi($isgziphtml);
} else {
$html=$isgziphtml;
}
return $html;
}

function checkguidandtoken($url,$proxyip,$proxyport,$ua,$guid,$token,$checkguidandtokenhtml,$timeout,$isgziphtmlfile){
$header = array("User-Agent:".$ua."","Q-GUID:".$guid."","Q-Token:".$token."");
$isgziphtml =checktheproxyserver($url,$proxyip,$proxyport, $header, $timeout);
if (isgziphtmlapi($isgziphtmlfile,$isgziphtml) == '1') {
$html=gzdecodeapi($isgziphtml);
} else {
$html=$isgziphtml;
}
if ($html == $checkguidandtokenhtml) {
$return="1";
} else {
$return="0";
}
return $return;
}

function getconfigguid($config){
$guid= get_between($config, '"Guid":"', '","Token"');
return $guid;
}

function getconfigtoken($config){
$token= get_between($config, '"Token":"', '"}');
return $token;
}

function getconfigtime($config){
$time= get_between($config, '"Time":"', '","Guid"');
return $time;
}

?>