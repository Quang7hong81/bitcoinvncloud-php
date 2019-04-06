<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-28
 * Time: 11:38
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use BitcoinVietnam\BitcoinVnCloud\Response\NewOrder\Data;
use JMS\Serializer\Annotation as Serializer;

final class NewOrder extends BaseResponse implements ResponseInterface
{
    /**
     * @var Data|null
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVnCloud\Response\NewOrder\Data")
     */
    private $data;

    /**
     * @return Data|null
     */
    public function getData(): ?Data
    {
        return $this->data;
    }
}