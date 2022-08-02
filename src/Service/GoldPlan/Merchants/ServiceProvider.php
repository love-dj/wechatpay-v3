<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\GoldPlan\Merchants;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider  implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['goldPlanMerchant'] = function ($app) {
            return new Client($app);
        };
    }
}