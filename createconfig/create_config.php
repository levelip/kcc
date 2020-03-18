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

$config = fgc('php://input');

// check for required fields
if (strlen($config) == 179) {
    // check Time result
  if (strlen(rvfjd($config,"Time")) == 19) {
    // check Guid result
  if (strlen(rvfjd($config,"Guid")) == 32) {
    // check Token result
  if (strlen(rvfjd($config,"Token")) == 96) {
  $result = fpc(KCC_ROOT."files/".$configwkdtconfigfilename,$config);
    // check result
  if ($result == 179) {
        // successfully put into file
    $response["success"] = 1;
    $response["message"] = "Config successfully created.";

        // echoing JSON response
    echo json_encode($response);
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "put failed.";

        // echoing JSON response
    echo json_encode($response);
  }
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "Token length is not equal to 96.";

        // echoing JSON response
    echo json_encode($response);
  }
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "Guid length is not equal to 32.";

        // echoing JSON response
    echo json_encode($response);
  }
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "Time length is not equal to 19.";

        // echoing JSON response
    echo json_encode($response);
  }
} else {
    // required field is missing
  $response["success"] = 0;
  $response["message"] = "Required field(s) is missing.";

    // echoing JSON response
  echo json_encode($response);
}
?>