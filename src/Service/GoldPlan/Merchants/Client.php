<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\GoldPlan\Merchants;


use GuzzleHttp\Exception\GuzzleException;
use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

class Client extends BaseClient
{
    /**
     * @return string
     */
    public static function className(): string
    {
        return 'goldplan/merchants';
    }

    /**
     * 点金计划管理API
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function changeGoldPlanStatus(array $params, array $options = []): array
    {
        $url = self::classUrl() . '/changegoldplanstatus';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }

    /**
     * 商家小票管理API
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function changeCustomPageStatus(array $params, array $options = []): array
    {
        $url = self::classUrl() . '/changecustompagestatus';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }

    /**
     * 同业过滤标签管理API
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function setAdvertisingIndustryFilter(array $params, array $options = []): array
    {
        $url = self::classUrl() . '/set-advertising-industry-filter';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }

    /**
     * 开通广告展示AP
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function openAdvertisingShow(array $params, array $options = []): array
    {
        $url = self::classUrl() . '/open-advertising-show';
        $options = $options + ['json' => $params];
        return $this->request('PATCH', $url, $options);
    }

    /**
     * 关闭广告展示API
     * @param array $params
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function closeAdvertisingShow(array $params, array $options = []): array
    {
        $url = self::classUrl() . '/close-advertising-show';
        $options = $options + ['json' => $params];
        return $this->request('POST', $url, $options);
    }
}