<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:19
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use BitcoinVietnam\BitcoinVnCloud\Response\TickerList\Item;
use JMS\Serializer\Annotation as Serializer;

final class TickerList extends BaseResponse implements ResponseInterface
{
    /**
     * @var Item[]
     *
     * @Serializer\Type("array<string, BitcoinVietnam\BitcoinVnCloud\Response\TickerList\Item>")
     */
    private $data;

    /**
     * @return Item[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}