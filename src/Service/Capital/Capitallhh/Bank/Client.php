<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Service\Capital\Capitallhh\Bank;

use GuzzleHttp\Exception\GuzzleException;
use Love\WeChatPayV3\Kernel\BaseClient;
use Love\WeChatPayV3\Kernel\Exceptions\ResultException;

class Client extends BaseClient
{
    /**
     * @param string $bankAliasCode
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function branchesList(string $bankAliasCode, $query = null, array $options = []): array
    {
        $url = self::classUrl() . '/' . $bankAliasCode . '/branches';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }

    /**
     * @param string $accountNumber
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function getBankInfo(string $accountNumber, array $options = []): array
    {
        $url = self::classUrl() . '/search-banks-by-bank-account';
        $opts = $options + ['query' => ['account_number' => $accountNumber]];
        return $this->request('GET', $url, $opts);
    }


    /**
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function personalBankList($query = null, array $options = []): array
    {
        $url = self::classUrl() . '/personal-banking';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }

    /**
     * @param null $query
     * @param array $options
     * @return array
     * @throws GuzzleException
     * @throws ResultException
     * @author Love
     */
    public function corporateBankList($query = null, array $options = []): array
    {
        $url = self::classUrl() . '/corporate-banking';
        $opts = $options + ['query' => $query];
        return $this->request('GET', $url, $opts);
    }
}