<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\Capital\Capitallhh\Area;


use GuzzleHttp\Exception\GuzzleException;
use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

class Client extends BaseClient
{
    /**
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function provincesList($query = null, array $options = []): array
    {
        $url = self::classUrl() . '/areas/provinces';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }

    /**
     * @param string $provinceCode
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function provinceCityList(string $provinceCode, $query = null, array $options = []): array
    {
        $url = self::classUrl() . '/areas/provinces/' . $provinceCode . '/cities';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }
}