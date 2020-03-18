# kcc
kcc开源源码。

使用方法

要定时监控本程序cron任务url/cron.php，以启用检查guid和token是否有效，如果无效则更新guid和token，直到没有可用的guid和token为止。

王卡配置助手自定义接口url/get_config.php。

王卡配置助手自定义接口提交配置url/create_config.php。

本程序手动提交配置url/submitguidandtoken.php。

本程序接口url/api.php。

tinyproxy自定义 token api url/get_tinyproxy_config.php。

本项目GITHUB开源地址

https://github.com/kccpdt/kcc/

网站列表

官网

https://kingcardconfig.ml/

官网(使用CDN)

https://kingcardconfigcdn.ml/

官方论坛

https://bbs.kingcardconfig.ml/

官方论坛(使用CDN)

https://bbs.kingcardconfigcdn.ml/

使用本程序的网站

详见sitelist.md。

本程序从1.002开始添加ubb支持

详见ubbsupportlist.md。

更新日志

版本:1.001

2019/05/31 21:40

日常维护更新！

2019/06/02 09:06

添加timeout设置参数$configtimeout,单位为秒。
更新config.php设置参数。
添加sitelist.md(使用本程序的已知网站列表)。

2019/06/02 14:29

修复当网页内容为gzip压缩时，验证失败的问题。
更新README.md。

2019/06/05 14:05

修复时间时区为默认时区的问题。
更新config.php默认设置参数。
更新index.php(修改版本号)。
更新README.md。

2019/06/05 19:53

添加任务日志开关。
添加4个获取配置点。
更新config.php。
更新sitelist.md。
更新README.md。

版本:1.002

2019/12/01 14:30

添加ubb支持。
更新config/config.php，index.php和submitguidandtoken.php。
添加可以在config/config.php里自定义index.php和submitguidandtoken.php显示内容。
添加ubbsupportlist.md。
更新README.md。
添加PHPMailer库。
更改结构。

2020/01/19 21:20

俢复getuserip函数多出端口的问题。
更新config/config.php。
添加可以在config/config.php里自定义kccedkey。
添加了[getversion] ubb并更新了ubbsupportlist.md。
更新README.md。
添加了api/api.php。
更改结构。

2020/01/20 16:25

修复[getversion] ubb。
更新config/config.php。
更新README.md。

2020/02/24 20:05

修复getuserip函数。
添加了一些东西。
更新config/config.php。
更新README.md。
更新sitelist.md。
更改结构。

2020/03/04 20:03

修复getuserip函数。
添加了一些东西。
更新config/config.php。
更新README.md。
更新sitelist.md。
添加了[prsv] ubb并更新了ubbsupportlist.md。
添加了.htaccess。
更改结构。

2020/03/05 22:35

更新config/config.php。
更新README.md。
修复[prsv] ubb。

2020/03/16 21:30

更新config/config.php。
更新README.md。
修复fpc函数。
修复createconfig/create_config.php可以接受任意长度大于50的内容。

