<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\Ecommerce\ProfitSharing\Receiver;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['ecommerceProfitSharingReceiver'] = function ($app) {
            return new Client($app);
        };
    }
}