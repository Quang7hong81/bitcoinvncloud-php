<?php
/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 2019-03-27
 * Time: 15:44
 */

namespace BitcoinVietnam\BitcoinVnCloud\Response;

use JMS\Serializer\Annotation as Serializer;

final class IsLive extends BaseResponse implements ResponseInterface
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $data;

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}