<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

//include_once(KCC_ROOT.'function/addsupportipv6.php');

/**
 * @Notes:
 * 判断该ip是否属于该网段
 * @Interface ip_in_network
 * @param $ip
 * @param $networkRange
 */
function ip_in_network($ip, $networkRange)
{
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $ip = (double) (sprintf("%u", ip2long($ip)));
    $s = explode('/', $networkRange);
    $network_start = (double) (sprintf("%u", ip2long($s[0])));
    $network_len = pow(2, 32 - $s[1]);
    $network_end = $network_start + $network_len - 1;

    if ($ip >= $network_start && $ip <= $network_end) {
        return true;
    }
    return false;
    } else {
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE)) {
    $ip = (double) (sprintf("%u", ip2long6($ip)));
    $s = explode('/', $networkRange);
    $network_start = (double) (sprintf("%u", ip2long6($s[0])));
    $network_len = pow(2, 128 - $s[1]);
    $network_end = $network_start + $network_len - 1;

    if ($ip >= $network_start && $ip <= $network_end) {
        return true;
    }
    return false;
    } else {
    return false;
    }
    }
}

?>