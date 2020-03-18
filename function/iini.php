<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

//include_once(KCC_ROOT.'function/ini.php');

function updatewkdtconfig($wkdtconfigfile,$checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,$checkguidandtokenhtml,$timeout,$isgziphtmlfile,$cronsuccessmessage,$wkdtconfig1url,$wkdtconfig2url,$wkdtconfig3url,$wkdtconfig4url,$wkdtconfig5url,$wkdtconfig1ua,$wkdtconfig2ua,$wkdtconfig3ua,$wkdtconfig4ua,$wkdtconfig5ua){
$wkdtconfig=fgc($wkdtconfigfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig),getconfigtoken($wkdtconfig),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig);
echo $cronsuccessmessage;
} else {
$wkdtconfig1=gethtml($wkdtconfig1url,$wkdtconfig1ua,$timeout,$isgziphtmlfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig1),getconfigtoken($wkdtconfig1),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig1);
echo $cronsuccessmessage;
} else {
$wkdtconfig2=gethtml($wkdtconfig2url,$wkdtconfig2ua,$timeout,$isgziphtmlfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig2),getconfigtoken($wkdtconfig2),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig2);
echo $cronsuccessmessage;
} else {
$wkdtconfig3=gethtml($wkdtconfig3url,$wkdtconfig3ua,$timeout,$isgziphtmlfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig3),getconfigtoken($wkdtconfig3),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig3);
echo $cronsuccessmessage;
} else {
$wkdtconfig4=gethtml($wkdtconfig4url,$wkdtconfig4ua,$timeout,$isgziphtmlfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig4),getconfigtoken($wkdtconfig4),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig4);
echo $cronsuccessmessage;
} else {
$wkdtconfig5=gethtml($wkdtconfig5url,$wkdtconfig5ua,$timeout,$isgziphtmlfile);
if (checkguidandtoken($checkguidandtokenurl,$checkguidandtokenproxyip,$checkguidandtokenproxyport,$checkguidandtokenua,getconfigguid($wkdtconfig5),getconfigtoken($wkdtconfig5),$checkguidandtokenhtml,$timeout,$isgziphtmlfile) == '1') {
fpc($wkdtconfigfile,$wkdtconfig5);
echo $cronsuccessmessage;
} else {
$time=date("Y-m-d H:i:s");
$notwkdtconfig='{"Time":"'.$time.'","Guid":"not king card config !","Token":"not king card config !"}';
fpc($wkdtconfigfile,$notwkdtconfig);
echo $cronsuccessmessage;
}
}
}
}
}
}
}

?>