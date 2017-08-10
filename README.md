# laravel_notifications_wechat
使用laravel 通知， EasyWechat 来通知客户。
laravel 5.3+ 请移步[excitedcat/laravel-notification-wechat](https://github.com/excitedcat/laravel-notification-wechat)
个人需要所以本项目是根据[excitedcat/laravel-notification-wechat](https://github.com/excitedcat/laravel-notification-wechat) 改写，适用Laravel 5.2。
还在测试阶段，慎用！！！

#安装方法
````composer require zztj/laravel_notifications_wechat````
#使用方法
编辑config/app.php文件在providers数组中增加：
````ExcitedCat\WechatNotification\WechatServiceProvider::class````
创建Notification
````php artisan make:notification NewInvoice````
调用方式参考Laravel官方文档

