<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/

function kcckey($txt, $kccekey) 
{ 
  $kccekey = base64_encode(md5($kccekey)); 
  $ctr = 0; 
  $return = ''; 
  for($i = 0; $i < strlen($txt); $i++) { 
  $ctr = $ctr == strlen($kccekey) ? 0 : $ctr; 
  $return .= $txt[$i] ^ $kccekey[$ctr++]; 
  } 
  return $return; 
}

function kcce($txt, $key = 'kcced2019') 
{ 
  srand((double)microtime() * 1000000); 
  $kccekey = base64_encode(md5(rand(0, 32000))); 
  $ctr = 0; 
  $return = ''; 
  for($i = 0;$i < strlen($txt); $i++) { 
  $ctr = $ctr == strlen($kccekey) ? 0 : $ctr; 
  $return .= $kccekey[$ctr].($txt[$i] ^ $kccekey[$ctr++]); 
  } 
  return base64_encode(urlencode(base64_encode(kcckey($return, $key)))); 
}

function kccd($txt, $key = 'kcced2019') 
{ 
  $txt = kcckey(base64_decode(urldecode(base64_decode($txt))), $key); 
  $return = ''; 
  for($i = 0;$i < strlen($txt); $i++) { 
  $md5 = $txt[$i]; 
  $return .= $txt[++$i] ^ $md5; 
  } 
  return $return; 
}

?>