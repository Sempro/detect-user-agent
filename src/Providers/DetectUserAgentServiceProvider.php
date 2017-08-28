<?php

namespace Sempro\DetectUserAgent\Providers;

use Detection\MobileDetect;
use Illuminate\Support\ServiceProvider;
use Sempro\DetectUserAgent\DetectUserAgent;

class DetectUserAgentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'Sempro\DetectUserAgent\Contracts\DetectUserAgent',
            function () {
                return new DetectUserAgent(new MobileDetect);
            }
        );
    }
}
