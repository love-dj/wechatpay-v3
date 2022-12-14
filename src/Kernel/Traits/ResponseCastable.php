<?php

namespace Love\WeChatPayV3\Kernel\Traits;

use Psr\Http\Message\ResponseInterface;

trait ResponseCastable
{
    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    protected function castResponse(ResponseInterface $response): array
    {
        $response->getBody()->rewind();
        $contents = $response->getBody()->getContents();
        $response->getBody()->rewind();
        $array = json_decode($contents, true, 512, JSON_BIGINT_AS_STRING);
        if (JSON_ERROR_NONE === json_last_error()) {
            return (array)$array;
        }
        return [];
    }
}