<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:20
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response\TickerList;

use JMS\Serializer\Annotation as Serializer;

class Item
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $last = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("lowestAsk")
     */
    private $lowestAsk = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("highestBid")
     */
    private $highestBid = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("percentChange")
     */
    private $percentChange = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("baseVolume")
     */
    private $baseVolume = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("quoteVolume")
     */
    private $quoteVolume = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $high24hr = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $low24hr = 0.0;

    /**
     * @return float
     */
    public function getLast(): float
    {
        return $this->last;
    }

    /**
     * @return float
     */
    public function getLowestAsk(): float
    {
        return $this->lowestAsk;
    }

    /**
     * @return float
     */
    public function getHighestBid(): float
    {
        return $this->highestBid;
    }

    /**
     * @return float
     */
    public function getPercentChange(): float
    {
        return $this->percentChange;
    }

    /**
     * @return float
     */
    public function getBaseVolume(): float
    {
        return $this->baseVolume;
    }

    /**
     * @return float
     */
    public function getQuoteVolume(): float
    {
        return $this->quoteVolume;
    }

    /**
     * @return float
     */
    public function getHigh24hr(): float
    {
        return $this->high24hr;
    }

    /**
     * @return float
     */
    public function getLow24hr(): float
    {
        return $this->low24hr;
    }
}