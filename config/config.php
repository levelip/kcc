<?php
/*
开发:kccpdt
开发GITHUB:kccpdt(https://github.com/kccpdt/)
本项目开发开源地址:https://github.com/kccpdt/kcc/
维护:kccpdt
维护GITHUB:kccpdt(https://github.com/kccpdt/)
本项目维护开源地址:https://github.com/kccpdt/kcc/
*/
$versionnumber='100220200316213000';
$version='1.002-20200316213000';
/*
以下为可修改项。
*/
$configcheckguidandtokenurl='http://dev.kingcardconfig.ml/kccd/tools/cgat/index.php';
$configcheckguidandtokenproxyip='157.255.173.182';
$configcheckguidandtokenproxyport='8090';
$configcheckguidandtokenua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configcheckguidandtokenhtml='Proxy Server Accessing checkguidandtoken Web Page Successfully ！';
$configwkdtconfig1url='http://cs.kingcardconfig.ml/k/get_config.php';
$configwkdtconfig1ua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configcronsuccessmessage='cron successfully !';
$configcronlogfilename='cronlog';
$configwkdtconfigfilename='wkdtconfig';
$configtimeout='3';
$configisgziphtmlfilename='isgziphtml';
$configcronlogonoroff='off';
$configwkdtconfig2url='http://cs.xxzml.cn/k/get_config.php';
$configwkdtconfig2ua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configwkdtconfig3url='http://himile.vip:81/wkdt/get_config.php';
$configwkdtconfig3ua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configwkdtconfig4url='http://wk.xxzml.cn/KingCardServices/get_config.php';
$configwkdtconfig4ua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configwkdtconfig5url='http://dev.kingcardconfig.ml/kccd/tools/tpatwkdtca/index.php?url=https://gitee.com/r0x/WK/raw/master/wk.htm';
$configwkdtconfig5ua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configkingcardconfigcheckupdateurl='http://dev.kingcardconfig.ml/kccd/update/kcc/index.php?a=cu&version=$version&versionnumber=$versionnumber';
$configkingcardconfigcheckupdateua='Mozilla/5.0 Linux; U; Android 7.0; zh-cn; BND-AL00 Build/HONORBND-AL00 AppleWebKit/537.36 KHTML, like Gecko Version/4.0 Chrome/66.0.3359.126 MQQBrowser/9.3 Mobile Safari/537.36';
$configkingcardconfigindexubborhtml='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-control" content="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<title>kcc 首页</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body id="index">
<h2>kcc 首页</h2>
<p>本站是 kcc 首页</p>
<p>本项目GITHUB开源地址: <a href = "https://github.com/kccpdt/kcc/">https://github.com/kccpdt/kcc/</a></p>
<p>官方网站: <a href = "https://kingcardconfig.ml/">https://kingcardconfig.ml</a></p>
<p>官方论坛: <a href = "https://bbs.kingcardconfig.ml/">https://bbs.kingcardconfig.ml</a></p>
<p>官方接口: <a href = "https://cs.kingcardconfig.ml/k/">https://cs.kingcardconfig.ml/k/</a></p>
<p><a href = "submitguidandtoken.php">提交配置</a></p>
<p>kcc版本:[getversion]</p>
<p>您的ip是:[getuserip]</p>
<!-- <a href = "?">?</body>a>  //-->
</body>
</html>';
$configkingcardconfigsubmitguidandtokenubborhtml='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-control" content="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<title>kcc 手动提交GUID和TOKEN配置页</title>
<link href="css/submitguidandtoken.css" rel="stylesheet" type="text/css" />
</head>
<body id="index">
<p>kcc 手动提交GUID和TOKEN配置页</p>
<form action="submitguidandtoken.php" name="form" id="form">
<p><input name="submit" type="hidden" id="submit" value="yes" /></p>
<p><label for="guid">GUID:</label><input type="text" name="guid" id="guid" /></p>
<p><label for="token">TOKEN:</label><input type="text" name="token" id="token" /></p>
<p><input type="submit" name="submit2" id="submit2" value="提交" /> <input type="reset" name="submit3" id="submit3" value="重置" /></p>
</form>
<p>您的ip是:[getuserip]</p>
</body>
</html>';
$configkccedkey='kccedkey';

?>