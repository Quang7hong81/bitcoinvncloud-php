<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 12:47
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response\GetOrderbook;

use JMS\Serializer\Annotation as Serializer;

class Data
{
    /**
     * @var array
     *
     * @Serializer\Type("array<array<float, float>>")
     */
    private $asks = [];

    /**
     * @var array
     *
     * @Serializer\Type("array<array<float, float>>")
     */
    private $bids = [];

    /**
     * @return array
     */
    public function getAsks(): array
    {
        return $this->asks;
    }

    /**
     * @return array
     */
    public function getBids(): array
    {
        return $this->bids;
    }
}