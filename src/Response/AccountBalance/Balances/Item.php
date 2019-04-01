<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 16:08
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response\AccountBalance\Balances;

use JMS\Serializer\Annotation as Serializer;

class Item
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $asset;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $usable = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $locked = 0.0;

    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @return float
     */
    public function getUsable(): float
    {
        return $this->usable;
    }

    /**
     * @return float
     */
    public function getLocked(): float
    {
        return $this->locked;
    }
}