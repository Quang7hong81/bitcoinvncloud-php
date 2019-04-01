<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 16:04
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

use JMS\Serializer\Annotation as Serializer;

final class AccountBalance extends BaseRequest
{
    /**
     * @var string
     *
     * @Serializer\AccessType("string")
     * @Serializer\SerializedName("assetCode")
     */
    private $assetCode;

    /**
     * AccountBalance constructor.
     * @param string|null $assetCode
     */
    public function __construct(?string $assetCode = null)
    {
        $this->method = 'get';
        $this->endpoint = '/account/balance';
        $this->assetCode = $assetCode;
    }
}