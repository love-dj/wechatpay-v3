<?php

namespace Love\WeChatPayV3\Service\Ecommerce\ProfitSharing\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['ecommerceProfitSharingOrder'] = function ($app) {
            return new Client($app);
        };
    }
}
