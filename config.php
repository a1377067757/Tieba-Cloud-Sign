<?php
//特别警告：请勿使用记事本编辑！！！如果你正在使用记事本并且还没有保存，赶紧关掉！！！
//如果你已经用记事本保存了，请立即下载最新版的云签到包解压并覆盖本文件

////////////////////////////以下选项只需在使用MySQL时填写////////////////////////////
//若使用MySQL，则BAE/SAE/JAE的数据库地址，用户名，密码请参考相关文档
//MySQL 数据库地址，普通主机一般为localhost
define('DB_HOST','localhost');
//MySQL 数据库用户名
define('DB_USER','root');
//MySQL 数据库密码
define('DB_PASSWD','');
//数据库名称(存放百度贴吧云签到的)
define('DB_NAME','tiebacloud');;

////////////////////////////以下选项使用任何数据库都得填写////////////////////////////
//数据库前缀，建议保持默认
define('DB_PREFIX','tc_');

//停用CSRF防御
//一旦停用，您的站点可能会遭到CSRF(跨站请求伪造)攻击
//若确实要停用，请删除下面这句话开头的两个斜杠 //
//define('ANTI_CSRF', false);

//加密用盐，请乱打，留空为不使用盐
define('SYSTEM_SALT','');