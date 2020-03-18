<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

include_once(KCC_ROOT.'lib/pclzip/pclzip.lib.php');

function unzip($file){
$archive = new PclZip($file);
if ($archive->extract() == 0) {
die("Unzip Error:".$archive->errorInfo(true));
}
}

?>