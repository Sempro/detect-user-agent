<?php

namespace Sempro\DetectUserAgent\Contracts;

interface DetectUserAgent
{
    public function isMobile();

    public function isTablet();

    public function isDesktop();

    public function getUserAgent();

    public function isAndroid();

    public function isIos();
}
