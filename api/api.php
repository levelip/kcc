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
$get=$_GET;
$apitk=$get["apitk"];
$txt=kccd($apitk,$configkccedkey);
$explode=explode(',',$txt);
$user=fgc(KCC_ROOT."files/user/".$explode[0]);
$userexplode=explode(',',$user);
if ($explode[0] == $userexplode[0]) {
if ($explode[1] == $userexplode[1]) {
if ($explode[2] == $userexplode[2]) {
if ($explode[3] == getuserip()) {
if ($explode[4] == $configkccedkey) {
$wkdtconfig=fgc(KCC_ROOT."files/".$configwkdtconfigfilename);
echo $wkdtconfig;
} else {
echo "key不正确！";
}
} else {
echo "api用户服务器IP不正确！";
}
} else {
echo "api用户tk不正确！";
}
} else {
echo "api用户密码不正确！";
}
} else {
echo "api用户名不存在！";
}
?>