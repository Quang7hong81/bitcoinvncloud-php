<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:38
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use BitcoinVietnam\BitcoinVnCloud\Response\CancelOrder\Data;
use JMS\Serializer\Annotation as Serializer;

final class CancelOrder extends BaseResponse implements ResponseInterface
{
    /**
     * @var Data
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVnCloud\Response\CancelOrder\Data")
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