<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:25
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

use JMS\Serializer\Annotation as Serializer;

abstract class BaseRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Serializer\Exclude()
     */
    protected $method;

    /**
     * @var string
     *
     * @Serializer\Exclude()
     */
    protected $endpoint;

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return (string) $this->method;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return (string) $this->endpoint;
    }
}