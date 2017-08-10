<?php

namespace ExcitedCat\WechatNotification;

use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->when(WechatChannel::class)
            ->give('wechat_notice');
    }

	/**
     * 在容器中注册绑定.
     *
     * @return void
     */
    public function register()
    {

    }
}
