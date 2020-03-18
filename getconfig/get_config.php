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
$wkdtconfig=fgc(KCC_ROOT."files/".$configwkdtconfigfilename);
if(judgeallips(fgc(KCC_ROOT."files/ltip"))) {
echo $wkdtconfig;
} else {
echo '{"Time":"'.date('Y-m-d H:i:s').'","Guid":"Your IP is:'.getuserip().'","Token":"Your UA is:'.getua().'"}';
}

?>