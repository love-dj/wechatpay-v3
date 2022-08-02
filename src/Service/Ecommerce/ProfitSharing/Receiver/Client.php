<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\Ecommerce\ProfitSharing\Receiver;

use GuzzleHttp\Exception\GuzzleException;
use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

class Client extends BaseClient
{
    /**
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     */
    public function add(array $params, array $options = [])
    {
        $url = self::classUrl() . '/add';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }

    /**
     * @param array $params
     * @param array $options
     * @return array
     * @throws ResultException
     * @throws GuzzleException
     */
    public function delete(array $params, array $options = [])
    {
        $url = self::classUrl() . '/delete';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }
}