<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:34
 */

namespace BitcoinVietnam\BitcoinVnCloud\Request;

use JMS\Serializer\Annotation as Serializer;

final class NewOrder extends BaseRequest
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
     */
    private $side;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $type;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $price = 0.0;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $quantity = 0.0;

    /**
     * NewOrder constructor.
     * @param string $symbol
     * @param string $side
     * @param string $type
     * @param float $price
     * @param float $quantity
     */
    public function __construct(string $symbol, string $side, string $type, float $price, float $quantity)
    {
        $this->symbol = $symbol;
        $this->side = $side;
        $this->type = $type;
        $this->price = $price;
        $this->quantity = $quantity;

        $this->method = 'post';
        $this->endpoint = '/order/create';
    }


}