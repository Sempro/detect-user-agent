<?php

namespace Sempro\DetectUserAgent;

use Detection\MobileDetect;
use Sempro\DetectUserAgent\Contracts\DetectUserAgent as DetectUserAgentContract;

class DetectUserAgent implements DetectUserAgentContract
{
    private $mobileDetect;

    public function __construct(MobileDetect $mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }

    public function isMobile()
    {
        return $this->mobileDetect->isMobile();
    }

    public function isTablet()
    {
        return $this->mobileDetect->isTablet();
    }

    public function isDesktop()
    {
        return (!$this->mobileDetect->isMobile() and !$this->mobileDetect->isTablet());
    }

    public function isAndroid()
    {
        return $this->mobileDetect->isAndroidOS();
    }

    public function isIos()
    {
        return $this->mobileDetect->isiOS();
    }

    public function getUserAgent()
    {
        if ($this->isTablet()) {
            return 'tablet';
        } elseif ($this->isMobile()) {
            return 'mobile';
        } else {
            return 'desktop';
        }
    }
}
