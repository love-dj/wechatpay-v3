<?php
declare(strict_types=1);

namespace Love\WeChatPayV3\Kernel\Exceptions;

use Throwable;

class ResultException extends Exception
{
    public $errorCode;
    public $errorMessage;

    /**
     * InvalidArgumentException constructor.
     * @param string $errorMessage
     * @param int $errorCode
     * @param Throwable|null $previous
     */
    public function __construct($errorMessage = "", $errorCode = '', Throwable $previous = null)
    {
        parent::__construct($errorMessage, 0, $previous);
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return int|string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
}