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

$kingcardconfigcheckupdate=gethtml($configkingcardconfigcheckupdateurl,$configkingcardconfigcheckupdateua,$configtimeout,KCC_ROOT."tmps/".$configisgziphtmlfilename);
$explode=explode('|',$kingcardconfigcheckupdate);

if ($explode[0] > $versionnumber) {
$zip=gethtml($explode[2],$configkingcardconfigcheckupdateua,$configtimeout,KCC_ROOT."tmps/".$configisgziphtmlfilename);
$fp = fopen(KCC_ROOT.'tmps/zip.zip', 'w');
fwrite($fp, $zip);
fclose($fp);
unzip(KCC_ROOT."tmps/zip.zip");
unlink(KCC_ROOT."tmps/zip.zip");
echo "更新中！";
} else {
echo "没有更新！";
}

?>