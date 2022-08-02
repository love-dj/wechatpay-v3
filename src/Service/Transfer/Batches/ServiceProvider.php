<?php
declare(strict_types=1);


namespace Love\WeChatPayV3\Service\Transfer\Batches;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['transfer'] = function ($app) {
            return new Client($app);
        };
    }
}