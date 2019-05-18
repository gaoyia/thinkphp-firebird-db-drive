# thinkphp-firebird-db-drive
thinkphp5.1-firebird-数据库驱动

使用方法：将db文件夹放入以下TP5.1核心目录
```
thinkphp\library\think
```
配置好数据库配置即可使用

```php
	return [
		// 数据库类型
		'type' => 'Firebird',
		// 服务器地址
		'hostname' => '',
		// 数据库名
		'database' => 'E:\xxx.FDB',
		// 用户名
		'username' => '',
		// 密码
		'password' => '',
	]
```