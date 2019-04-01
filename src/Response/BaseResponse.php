<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:41
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use JMS\Serializer\Annotation as Serializer;

abstract class BaseResponse
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $code;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $msg;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return 'ok' === $this->msg;
    }
}