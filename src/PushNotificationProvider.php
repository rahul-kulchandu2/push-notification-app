<?php

namespace Kulchandu\PushNotificationApp;

use Illuminate\Support\ServiceProvider;
use Kulchandu\PushNotificationApp\Services\FCMService;

class PushNotificationProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/fcm.php', 'PushNotificationApp');
        $this->publishes([
            __DIR__ . '/config/fcm.php' => config_path('fcm.php'),
            __DIR__ . '/Services/FCMService.php' => app_path('Services/FCMService.php'),
        ]);
    }
    public function register()
    {
        $this->app->singleton('fcm', function ($app) {
            return new FCMService();
        });
    }
}
