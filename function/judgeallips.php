<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

//include_once(KCC_ROOT.'function/ip_in_network.php');
//include_once(KCC_ROOT.'function/getuserip.php');

/**
 * @Notes:
 * 判断是否是allips
 * @Interface judgeallips
 */
function judgeallips($ALLIPS)
{
    $ALLIPS = explode("\n", $ALLIPS);
    foreach ($ALLIPS as $v) {
        if (ip_in_network(getuserip(), $v) == true) {
            return true;
        }
    }

    return false;
}

?>