<?php

namespace Love\WeChatPayV3;

use Love\WeChatPayV3\Service\Application;

class Factory
{
    public static function app(array $config = [])
    {
        return new Application($config);
    }
}