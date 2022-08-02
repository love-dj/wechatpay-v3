<?php

namespace Love\WeChatPayV3\Service\Ecommerce\Fund\Balance;

use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * @return string
     */
    public static function className(): string
    {
        return 'ecommerce/fund/balance';
    }
}
