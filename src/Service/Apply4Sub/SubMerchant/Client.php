<?php

namespace Love\WeChatPayV3\Service\Apply4Sub\SubMerchant;

use GuzzleHttp\Exception\GuzzleException;
use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

/**
 * Class Client.
 *
 */
class Client extends BaseClient
{
    /**
     * @param string $subMerchantId
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     */
    public function retrieveSettlement(string $subMerchantId, $query = null, array $options = []): array
    {
        $url = self::classUrl() . '/' . $subMerchantId . '/settlement';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }

    /**
     * @param string $subMerchantId
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     */
    public function updateSettlement(string $subMerchantId, array $params, array $options = []): array
    {
        $url = self::classUrl() . '/' . $subMerchantId . '/modify-settlement';
        $opts = $options + ['json' => $params];
        return $this->request('POST', $url, $opts);
    }
}
