<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\Pay\Partner\Transaction;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['partnerTransaction'] = function ($app) {
            return new Client($app);
        };
    }
}