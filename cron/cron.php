<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/
include_once(dirname(dirname(__FILE__)).'/public/public.php');
if ($configcronlogonoroff == 'on') {
if (wltfapi(KCC_ROOT."logs/".$configcronlogfilename) == '1') {
updatewkdtconfig(KCC_ROOT."files/".$configwkdtconfigfilename,$configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,$configcheckguidandtokenhtml,$configtimeout,KCC_ROOT."tmps/".$configisgziphtmlfilename,$configcronsuccessmessage,$configwkdtconfig1url,$configwkdtconfig2url,$configwkdtconfig3url,$configwkdtconfig4url,$configwkdtconfig5url,$configwkdtconfig1ua,$configwkdtconfig2ua,$configwkdtconfig3ua,$configwkdtconfig4ua,$configwkdtconfig5ua);
} else {
echo "写入任务日志到".KCC_ROOT."logs/".$configcronlogfilename."失败！";
}
} else {
updatewkdtconfig(KCC_ROOT."files/".$configwkdtconfigfilename,$configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,$configcheckguidandtokenhtml,$configtimeout,KCC_ROOT."tmps/".$configisgziphtmlfilename,$configcronsuccessmessage,$configwkdtconfig1url,$configwkdtconfig2url,$configwkdtconfig3url,$configwkdtconfig4url,$configwkdtconfig5url,$configwkdtconfig1ua,$configwkdtconfig2ua,$configwkdtconfig3ua,$configwkdtconfig4ua,$configwkdtconfig5ua);
}
?>