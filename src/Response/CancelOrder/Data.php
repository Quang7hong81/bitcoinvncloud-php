<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:40
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response\CancelOrder;

use JMS\Serializer\Annotation as Serializer;

class Data
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
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getOrderUuid(): string
    {
        return $this->orderUuid;
    }
}