<?php

namespace BitcoinVietnam\BitcoinVnCloud\Request;

use JMS\Serializer\Annotation as Serializer;

final class CancelOrder extends BaseRequest
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $symbol;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderUuid")
     */
    private $orderUuid;

    /**
     * CancelOrder constructor.
     * @param string $symbol
     * @param string $orderUuid
     */
    public function __construct(string $symbol, string $orderUuid)
    {
        $this->symbol = $symbol;
        $this->orderUuid = $orderUuid;
    }
}