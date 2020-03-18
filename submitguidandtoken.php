<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/
include_once('public/public.php');
$submit = $_GET['submit'];
if ($submit == 'yes') {
$guid = $_GET['guid'];
$token = $_GET['token'];
$time=date("Y-m-d H:i:s");
$wkdtconfig='{"Time":"'.$time.'","Guid":"'.$guid.'","Token":"'.$token.'"}';
fpc(KCC_ROOT."files/".$configwkdtconfigfilename,$wkdtconfig);
echo "写入配置到".KCC_ROOT."files/".$configwkdtconfigfilename."成功！";
} else {
echo ubbtohtml($configkingcardconfigsubmitguidandtokenubborhtml);
}
?>