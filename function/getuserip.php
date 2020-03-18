<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

/**
 * @Notes:
 * 取用户ip
 * @Interface getuserip
 */
function getuserip() {
    if (getenv("HTTP_ALI_CDN_REAL_IP"))
        $ip = getenv("HTTP_ALI_CDN_REAL_IP");
    else if (getenv("HTTP_CF_CONNECTING_IP"))
        $ip = getenv("HTTP_CF_CONNECTING_IP");
    else if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_REAL_IP"))
        $ip = getenv("HTTP_X_REAL_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";
    if(strstr($ip,',')){
        $ip = strstr($ip,",",true);
    }
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    $ip=$ip;
    } else {
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE)) {
    $ip=$ip;
    } else {
    if(strstr($ip,':')){
        $ip = strstr($ip,":",true);
    }
    }
    }
    return $ip;
}

?>