<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 12:40
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use BitcoinVietnam\BitcoinVnCloud\Response\GetOrderbook\Data;
use JMS\Serializer\Annotation as Serializer;

final class GetOrderbook extends BaseResponse implements ResponseInterface
{
    /**
     * @var Data
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVnCloud\Response\GetOrderbook\Data")
     */
    private $data;

    /**
     * @return Data
     */
    public function getData(): Data
    {
        return $this->data;
    }
}